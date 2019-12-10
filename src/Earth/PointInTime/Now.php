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
    Timezone\Earth\UTC,
    Clock\Year,
    Clock\Month,
    Clock\Day,
    Clock\Hour,
    Clock\Minute,
    Clock\Second,
    Clock\Millisecond,
};

final class Now implements PointInTimeInterface
{
    private $point;

    public function __construct()
    {
        if (PHP_VERSION_ID < 70100) {
            $time = \microtime(true);
            $timestamp = (int) $time;
            $milliseconds = (int) \round($time * 1000);
            $date = \sprintf(
                \date(
                    'Y-m-d\TH:i:s.%03\sP',
                    $timestamp
                ),
                $milliseconds - ($timestamp * 1000)
            );
        } else {
            $date = (new \DateTime('now'))->format('Y-m-d\TH:i:s.uP');
        }

        $this->point = new PointInTime($date);
    }

    public function milliseconds(): int
    {
        return $this->point->milliseconds();
    }

    public function year(): Year
    {
        return $this->point->year();
    }

    public function month(): Month
    {
        return $this->point->month();
    }

    public function day(): Day
    {
        return $this->point->day();
    }

    public function hour(): Hour
    {
        return $this->point->hour();
    }
    public function minute(): Minute
    {
        return $this->point->minute();
    }

    public function second(): Second
    {
        return $this->point->second();
    }

    public function millisecond(): Millisecond
    {
        return $this->point->millisecond();
    }

    public function format(Format $format): string
    {
        return $this->point->format($format);
    }

    public function changeTimezone(Timezone $zone): PointInTimeInterface
    {
        $self = clone $this;
        $self->point = $this->point->changeTimezone($zone);

        return $self;
    }

    public function timezone(): Timezone
    {
        return $this->point->timezone();
    }

    public function elapsedSince(PointInTimeInterface $point): ElapsedPeriodInterface
    {
        return new ElapsedPeriod($this->milliseconds() - $point->milliseconds());
    }

    public function goBack(Period $period): PointInTimeInterface
    {
        return $this->point->goBack($period);
    }

    public function goForward(Period $period): PointInTimeInterface
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
