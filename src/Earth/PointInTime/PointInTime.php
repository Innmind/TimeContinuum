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

final class PointInTime implements PointInTimeInterface
{
    private int $milliseconds;
    private \DateTimeImmutable $date;
    private ?Year $year = null;
    private ?Month $month = null;
    private ?Day $day = null;
    private ?Hour $hour = null;
    private ?Minute $minute = null;
    private ?Second $second = null;
    private ?Millisecond $millisecond = null;
    private ?Timezone $timezone = null;
    private ?string $string = null;
    /** @var list<string> */
    private static array $periodComponents = [
        'years',
        'months',
        'days',
        'hours',
        'minutes',
        'seconds',
    ];

    public function __construct(string $date)
    {
        $this->date = new \DateTimeImmutable($date);
        $this->milliseconds = $this->date->getTimestamp() * 1000;
        $this->milliseconds += $this->millisecond()->toInt();
    }

    public function milliseconds(): int
    {
        return $this->milliseconds;
    }

    public function year(): Year
    {
        if (!$this->year instanceof Year) {
            $this->year = new Year((int) $this->date->format('Y'));
        }

        return $this->year;
    }

    public function month(): Month
    {
        if (!$this->month instanceof Month) {
            $this->month = new Month(
                $this->year(),
                (int) $this->date->format('n')
            );
        }

        return $this->month;
    }

    public function day(): Day
    {
        if (!$this->day instanceof Day) {
            $this->day = new Day(
                $this->year(),
                $this->month(),
                (int) $this->date->format('j')
            );
        }

        return $this->day;
    }

    public function hour(): Hour
    {
        if (!$this->hour instanceof Hour) {
            $this->hour = new Hour(
                (int) $this->date->format('G')
            );
        }

        return $this->hour;
    }
    public function minute(): Minute
    {
        if (!$this->minute instanceof Minute) {
            $this->minute = new Minute(
                (int) $this->date->format('i')
            );
        }

        return $this->minute;
    }

    public function second(): Second
    {
        if (!$this->second instanceof Second) {
            $this->second = new Second(
                (int) $this->date->format('s')
            );
        }

        return $this->second;
    }

    public function millisecond(): Millisecond
    {
        if (!$this->millisecond instanceof Millisecond) {
            $this->millisecond = new Millisecond(
                (int) ((int) $this->date->format('u') / 1000)
            );
        }

        return $this->millisecond;
    }

    public function format(Format $format): string
    {
        return $this->date->format($format->toString());
    }

    public function changeTimezone(Timezone $zone): PointInTimeInterface
    {
        $self = clone $this;
        $self->date = $this->date->setTimezone(
            new \DateTimeZone($zone->toString())
        );
        $self->year = null;
        $self->month = null;
        $self->day = null;
        $self->hour = null;
        $self->minute = null;
        $self->second = null;
        $self->millisecond = null;
        $self->timezone = null;
        $self->string = null;

        return $self;
    }

    public function timezone(): Timezone
    {
        if (!$this->timezone instanceof Timezone) {
            $this->timezone = UTC::of($this->date->format('P'));
        }

        return $this->timezone;
    }

    public function elapsedSince(PointInTimeInterface $point): ElapsedPeriodInterface
    {
        return new ElapsedPeriod($this->milliseconds() - $point->milliseconds());
    }

    public function goBack(Period $period): PointInTimeInterface
    {
        if ($this->millisecond()->toInt() > 0) {
            $period = $period->add(
                new MillisecondPeriod(1000 - $this->millisecond()->toInt())
            );
        }
        $date = $this->date;

        foreach (self::$periodComponents as $component) {
            /** @var int $periodComponent */
            $periodComponent = $period->{$component}();

            if ($periodComponent > 0) {
                $date = $date->modify(
                    \sprintf(
                        '-%s %s',
                        $periodComponent,
                        $component
                    )
                );
            }
        }

        if ($this->millisecond()->toInt() === 0 && $period->milliseconds() > 0) {
            $date = $date->modify('-1 second');
        }

        return new self(sprintf(
            $date->format('Y-m-d\TH:i:s.%03\sP'),
            $period->milliseconds() > 0 ? 1000 - $period->milliseconds() : 0
        ));
    }

    public function goForward(Period $period): PointInTimeInterface
    {
        $period = $period->add(
            new MillisecondPeriod($this->millisecond()->toInt())
        );
        $date = $this->date;

        foreach (self::$periodComponents as $component) {
            /** @var int $periodComponent */
            $periodComponent = $period->{$component}();

            if ($periodComponent > 0) {
                $date = $date->modify(
                    \sprintf(
                        '+%s %s',
                        $periodComponent,
                        $component
                    )
                );
            }
        }

        return new self(\sprintf(
            $date->format('Y-m-d\TH:i:s.%03\sP'),
            $period->milliseconds()
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
        if ($this->string === null) {
            $this->string = $this->date->format(\DateTime::ATOM);
        }

        return $this->string;
    }
}
