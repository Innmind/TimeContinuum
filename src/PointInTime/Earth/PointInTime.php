<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\PointInTime\Earth;

use Innmind\TimeContinuum\{
    PointInTimeInterface,
    FormatInterface,
    TimezoneInterface,
    ElapsedPeriod,
    ElapsedPeriodInterface,
    PeriodInterface,
    Timezone\Earth\UTC,
    TimeContinuum\YearInterface,
    TimeContinuum\MonthInterface,
    TimeContinuum\DayInterface,
    TimeContinuum\HourInterface,
    TimeContinuum\MinuteInterface,
    TimeContinuum\SecondInterface,
    TimeContinuum\MillisecondInterface,
    TimeContinuum\Earth\Year,
    TimeContinuum\Earth\Month,
    TimeContinuum\Earth\Day,
    TimeContinuum\Earth\Hour,
    TimeContinuum\Earth\Minute,
    TimeContinuum\Earth\Second,
    TimeContinuum\Earth\Millisecond,
    Period\Earth\Millisecond as MillisecondPeriod,
};

final class PointInTime implements PointInTimeInterface
{
    private $milliseconds;
    private $date;
    private $year;
    private $month;
    private $day;
    private $hour;
    private $minute;
    private $second;
    private $millisecond;
    private $timezone;
    private $string;
    private static $periodComponents = [
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

    public function year(): YearInterface
    {
        if (!$this->year instanceof Year) {
            $this->year = new Year((int) $this->date->format('Y'));
        }

        return $this->year;
    }

    public function month(): MonthInterface
    {
        if (!$this->month instanceof Month) {
            $this->month = new Month(
                $this->year(),
                (int) $this->date->format('n')
            );
        }

        return $this->month;
    }

    public function day(): DayInterface
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

    public function hour(): HourInterface
    {
        if (!$this->hour instanceof Hour) {
            $this->hour = new Hour(
                (int) $this->date->format('G')
            );
        }

        return $this->hour;
    }
    public function minute(): MinuteInterface
    {
        if (!$this->minute instanceof Minute) {
            $this->minute = new Minute(
                (int) $this->date->format('i')
            );
        }

        return $this->minute;
    }

    public function second(): SecondInterface
    {
        if (!$this->second instanceof Second) {
            $this->second = new Second(
                (int) $this->date->format('s')
            );
        }

        return $this->second;
    }

    public function millisecond(): MillisecondInterface
    {
        if (!$this->millisecond instanceof Millisecond) {
            $this->millisecond = new Millisecond(
                (int) ((int) $this->date->format('u') / 1000)
            );
        }

        return $this->millisecond;
    }

    public function format(FormatInterface $format): string
    {
        return $this->date->format((string) $format);
    }

    public function changeTimezone(TimezoneInterface $zone): PointInTimeInterface
    {
        $self = clone $this;
        $self->date = $this->date->setTimezone(
            new \DateTimeZone((string) $zone)
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

    public function timezone(): TimezoneInterface
    {
        if (!$this->timezone instanceof TimezoneInterface) {
            $this->timezone = UTC::of($this->date->format('P'));
        }

        return $this->timezone;
    }

    public function elapsedSince(PointInTimeInterface $point): ElapsedPeriodInterface
    {
        return new ElapsedPeriod($this->milliseconds() - $point->milliseconds());
    }

    public function goBack(PeriodInterface $period): PointInTimeInterface
    {
        if ($this->millisecond()->toInt() > 0) {
            $period = $period->add(
                new MillisecondPeriod(1000 - $this->millisecond()->toInt())
            );
        }
        $date = $this->date;

        foreach (self::$periodComponents as $component) {
            if ($period->{$component}() > 0) {
                $date = $date->modify(
                    \sprintf(
                        '-%s %s',
                        $period->{$component}(),
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

    public function goForward(PeriodInterface $period): PointInTimeInterface
    {
        $period = $period->add(
            new MillisecondPeriod($this->millisecond()->toInt())
        );
        $date = $this->date;

        foreach (self::$periodComponents as $component) {
            if ($period->{$component}() > 0) {
                $date = $date->modify(
                    \sprintf(
                        '+%s %s',
                        $period->{$component}(),
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

    public function __toString(): string
    {
        if ($this->string === null) {
            $this->string = $this->date->format(\DateTime::ATOM);
        }

        return $this->string;
    }
}
