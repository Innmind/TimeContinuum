<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\PointInTime\Earth;

use Innmind\TimeContinuum\{
    PointInTimeInterface,
    FormatInterface,
    TimezoneInterface,
    ElapsedPeriod,
    PeriodInterface,
    Timezone\Earth\UTC,
    TimeContinuum\YearInterface,
    TimeContinuum\MonthInterface,
    TimeContinuum\DayInterface,
    TimeContinuum\HourInterface,
    TimeContinuum\MinuteInterface,
    TimeContinuum\SecondInterface,
    TimeContinuum\MillisecondInterface
};

final class Now implements PointInTimeInterface
{
    private $point;

    public function __construct()
    {
        $time = microtime(true);
        $timestamp = (int) $time;
        $milliseconds = (int) round($time * 1000);
        $this->point = new PointInTime(sprintf(
            date(
                'Y-m-d\TH:i:s.%03\sP',
                $timestamp
            ),
            $milliseconds - ($timestamp * 1000)
        ));
    }

    public function milliseconds(): int
    {
        return $this->point->milliseconds();
    }

    public function year(): YearInterface
    {
        return $this->point->year();
    }

    public function month(): MonthInterface
    {
        return $this->point->month();
    }

    public function day(): DayInterface
    {
        return $this->point->day();
    }

    public function hour(): HourInterface
    {
        return $this->point->hour();
    }
    public function minute(): MinuteInterface
    {
        return $this->point->minute();
    }

    public function second(): SecondInterface
    {
        return $this->point->second();
    }

    public function millisecond(): MillisecondInterface
    {
        return $this->point->millisecond();
    }

    public function format(FormatInterface $format): string
    {
        return $this->point->format($format);
    }

    public function changeTimezone(TimezoneInterface $zone): PointInTimeInterface
    {
        $self = clone $this;
        $self->point = $this->point->changeTimezone($zone);

        return $self;
    }

    public function timezone(): TimezoneInterface
    {
        return $this->point->timezone();
    }

    public function atUTC(): PointInTimeInterface
    {
        return $this->changeTimezone(new UTC);
    }

    public function elapsedSince(PointInTimeInterface $point): ElapsedPeriod
    {
        return new ElapsedPeriod($this->milliseconds() - $point->milliseconds());
    }

    public function goBack(PeriodInterface $period): PointInTimeInterface
    {
        return $this->point->goBack($period);
    }

    public function goForward(PeriodInterface $period): PointInTimeInterface
    {
        return $this->point->goForward($period);
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
        return (string) $this->point;
    }
}
