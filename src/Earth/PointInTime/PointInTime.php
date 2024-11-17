<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\PointInTime;

use Innmind\TimeContinuum\{
    PointInTime as PointInTimeInterface,
    Format,
    Timezone,
    Earth\ElapsedPeriod,
    ElapsedPeriod as ElapsedPeriodInterface,
    Period,
    Clock\Year,
    Clock\Month,
    Clock\Day,
    Clock\Hour,
    Clock\Minute,
    Clock\Second,
    Clock\Millisecond,
    Earth\Timezone\UTC,
    Earth\Period\Millisecond as MillisecondPeriod,
};

/**
 * @psalm-immutable
 */
final class PointInTime implements PointInTimeInterface
{
    private int $milliseconds;
    private \DateTimeImmutable $date;

    /**
     * @internal
     */
    public function __construct(string $date)
    {
        $this->date = new \DateTimeImmutable($date);
        $milliseconds = $this->date->getTimestamp() * 1000;
        $this->milliseconds = $milliseconds + $this->millisecond()->toInt();
    }

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
        /** @var int<0, 999> */
        $millisecond = (int) ((int) $this->date->format('u') / 1000);

        return Millisecond::of($millisecond);
    }

    public function format(Format $format): string
    {
        return $this->date->format($format->toString());
    }

    public function changeTimezone(Timezone $zone): PointInTimeInterface
    {
        $self = clone $this;
        $self->date = $this->date->setTimezone(
            new \DateTimeZone($zone->toString()),
        );

        return $self;
    }

    public function timezone(): Timezone
    {
        return UTC::of($this->date->format('P'));
    }

    public function elapsedSince(PointInTimeInterface $point): ElapsedPeriodInterface
    {
        return new ElapsedPeriod($this->milliseconds() - $point->milliseconds());
    }

    public function goBack(Period $period): PointInTimeInterface
    {
        if ($this->millisecond()->toInt() > 0) {
            $period = $period->add(
                new MillisecondPeriod(1000 - $this->millisecond()->toInt()),
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
        return new self(\sprintf(
            $date->format('Y-m-d\TH:i:s.%03\sP'),
            $period->milliseconds() > 0 ? 1000 - $period->milliseconds() : 0,
        ));
    }

    public function goForward(Period $period): PointInTimeInterface
    {
        $period = $period->add(
            new MillisecondPeriod($this->millisecond()->toInt()),
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
        return new self(\sprintf(
            $date->format('Y-m-d\TH:i:s.%03\sP'),
            $period->milliseconds(),
        ));
    }

    public function equals(PointInTimeInterface $point): bool
    {
        return $this->milliseconds() === $point->milliseconds();
    }

    public function aheadOf(PointInTimeInterface $point): bool
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
}
