<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

use Innmind\TimeContinuum\{
    PointInTime\Year,
    PointInTime\Month,
    PointInTime\Day,
    PointInTime\Hour,
    PointInTime\Minute,
    PointInTime\Second,
    PointInTime\Millisecond,
    PointInTime\HighResolution,
};

/**
 * @psalm-immutable
 */
final class PointInTime
{
    /**
     * @param int<0, max> $milliseconds
     */
    private function __construct(
        private \DateTimeImmutable $date,
        private ?HighResolution $highResolution,
        private int $milliseconds,
    ) {
    }

    /**
     * @psalm-pure
     * @internal
     *
     * @param non-empty-string $date
     */
    public static function at(string $date): self
    {
        $datetime = new \DateTimeImmutable($date);
        /** @var int<0, max> */
        $milliseconds = $datetime->getTimestamp() * 1000;

        return new self(
            $datetime,
            null,
            $milliseconds + self::millisecondOf($datetime),
        );
    }

    /**
     * @internal
     */
    public static function now(): self
    {
        $now = new \DateTimeImmutable('now');
        /** @psalm-suppress ImpureMethodCallAcceptable since only a clock should instantiate this class */
        $highResolution = HighResolution::now();
        /** @var int<0, max> */
        $milliseconds = $now->getTimestamp() * 1000;

        return new self(
            $now,
            $highResolution,
            $milliseconds + self::millisecondOf($now),
        );
    }

    /**
     * Since 1970-01-01T00:00:00+00:00
     *
     * @return int<0, max>
     */
    public function milliseconds(): int
    {
        return $this->milliseconds;
    }

    public function year(): Year
    {
        return Year::of((int) $this->date->format('Y'));
    }

    public function month(): Month
    {
        /** @var int<1, 12> */
        $month = (int) $this->date->format('n');

        return Month::of(
            $this->year(),
            $month,
        );
    }

    public function day(): Day
    {
        /** @var int<1, 31> */
        $day = (int) $this->date->format('j');

        return Day::of(
            $this->year(),
            $this->month(),
            $day,
        );
    }

    public function hour(): Hour
    {
        /** @var int<0, 23> */
        $hour = (int) $this->date->format('G');

        return Hour::of($hour);
    }
    public function minute(): Minute
    {
        /** @var int<0, 59> */
        $minute = (int) $this->date->format('i');

        return Minute::of($minute);
    }

    public function second(): Second
    {
        /** @var int<0, 59> */
        $second = (int) $this->date->format('s');

        return Second::of($second);
    }

    public function millisecond(): Millisecond
    {
        return Millisecond::of(self::millisecondOf($this->date));
    }

    public function format(Format $format): string
    {
        return $this->date->format($format->toString());
    }

    public function changeTimezone(Timezone $zone): self
    {
        return new self(
            $this->date->setTimezone(
                new \DateTimeZone($zone->toString()),
            ),
            $this->highResolution,
            $this->milliseconds,
        );
    }

    public function timezone(): Timezone
    {
        $string = $this->date->format('P');
        [$hour, $minute] = \explode(':', $string);

        /** @psalm-suppress ArgumentTypeCoercion */
        return Timezone::of((int) $hour, (int) $minute);
    }

    public function elapsedSince(self $point): ElapsedPeriod
    {
        if (!\is_null($this->highResolution) && !\is_null($point->highResolution)) {
            return $this->highResolution->elapsedSince($point->highResolution);
        }

        return ElapsedPeriod::of($this->milliseconds() - $point->milliseconds());
    }

    public function goBack(Period $period): self
    {
        if ($this->millisecond()->toInt() > 0) {
            $period = $period->add(
                Period\Millisecond::of(1000 - $this->millisecond()->toInt()),
            );
        }
        $date = $this->date;

        foreach (self::periodComponents() as $component) {
            /** @var int $periodComponent */
            $periodComponent = $period->{$component}();

            if ($periodComponent > 0) {
                /** @psalm-suppress PossiblyFalseReference The input is validated so there shouldn't be any error */
                $date = $date->modify(
                    \sprintf(
                        '-%s %s',
                        $periodComponent,
                        $component,
                    ),
                );
            }
        }

        if ($this->millisecond()->toInt() === 0 && $period->milliseconds() > 0) {
            /** @psalm-suppress PossiblyFalseReference The input is validated so there shouldn't be any error */
            $date = $date->modify('-1 second');
        }

        /** @psalm-suppress PossiblyFalseReference The input is validated so there shouldn't be any error */
        // todo avoid using the string representation
        return self::at(\sprintf(
            $date->format('Y-m-d\TH:i:s.%03\sP'),
            $period->milliseconds() > 0 ? 1000 - $period->milliseconds() : 0,
        ));
    }

    public function goForward(Period $period): self
    {
        $period = $period->add(
            Period\Millisecond::of($this->millisecond()->toInt()),
        );
        $date = $this->date;

        foreach (self::periodComponents() as $component) {
            /** @var int $periodComponent */
            $periodComponent = $period->{$component}();

            if ($periodComponent > 0) {
                /** @psalm-suppress PossiblyFalseReference The input is validated so there shouldn't be any error */
                $date = $date->modify(
                    \sprintf(
                        '+%s %s',
                        $periodComponent,
                        $component,
                    ),
                );
            }
        }

        /** @psalm-suppress PossiblyFalseReference The input is validated so there shouldn't be any error */
        // todo avoid using the string representation
        return self::at(\sprintf(
            $date->format('Y-m-d\TH:i:s.%03\sP'),
            $period->milliseconds(),
        ));
    }

    public function equals(self $point): bool
    {
        return $this->milliseconds() === $point->milliseconds();
    }

    public function aheadOf(self $point): bool
    {
        return $this->milliseconds() > $point->milliseconds();
    }

    public function toString(): string
    {
        return $this->date->format(\DateTime::ATOM);
    }

    /**
     * @psalm-pure
     *
     * @return list<string>
     */
    private static function periodComponents(): array
    {
        return [
            'years',
            'months',
            'days',
            'hours',
            'minutes',
            'seconds',
        ];
    }

    /**
     * @psalm-pure
     *
     * @return int<0, 999>
     */
    private static function millisecondOf(\DateTimeImmutable $date): int
    {
        /** @var int<0, 999> */
        return (int) ((int) $date->format('u') / 1000);
    }
}
