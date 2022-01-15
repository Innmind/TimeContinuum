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
    Earth\Timezone\UTC,
    Earth\Clock\Year,
    Earth\Clock\Month,
    Earth\Clock\Day,
    Earth\Clock\Hour,
    Earth\Clock\Minute,
    Earth\Clock\Second,
    Earth\Clock\Millisecond,
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
        return new Year((int) $this->date->format('Y'));
    }

    public function month(): Month
    {
        return new Month(
            $this->year(),
            (int) $this->date->format('n'),
        );
    }

    public function day(): Day
    {
        return new Day(
            $this->year(),
            $this->month(),
            (int) $this->date->format('j'),
        );
    }

    public function hour(): Hour
    {
        return new Hour(
            (int) $this->date->format('G'),
        );
    }
    public function minute(): Minute
    {
        return new Minute(
            (int) $this->date->format('i'),
        );
    }

    public function second(): Second
    {
        return new Second(
            (int) $this->date->format('s'),
        );
    }

    public function millisecond(): Millisecond
    {
        return new Millisecond(
            (int) ((int) $this->date->format('u') / 1000),
        );
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
            $date = $date->modify('-1 second');
        }

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
                $date = $date->modify(
                    \sprintf(
                        '+%s %s',
                        $periodComponent,
                        $component,
                    ),
                );
            }
        }

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
