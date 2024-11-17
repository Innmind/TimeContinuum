<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\PointInTime;

use Innmind\TimeContinuum\{
    PointInTime as PointInTimeInterface,
    Format,
    Timezone,
    ElapsedPeriod,
    Period,
    PointInTime\Year,
    PointInTime\Month,
    PointInTime\Day,
    PointInTime\Hour,
    PointInTime\Minute,
    PointInTime\Second,
    PointInTime\Millisecond,
};

/**
 * @psalm-immutable
 */
final class Now implements PointInTimeInterface
{
    private PointInTimeInterface $point;
    private HighResolution $highResolution;

    public function __construct()
    {
        $date = (new \DateTimeImmutable('now'))->format('Y-m-d\TH:i:s.uP');
        /** @psalm-suppress ImpureMethodCallAcceptable since only a clock should instantiate this class */
        $highResolution = HighResolution::now();

        $this->point = new PointInTime($date);
        $this->highResolution = $highResolution;
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

    public function elapsedSince(PointInTimeInterface $point): ElapsedPeriod
    {
        if ($point instanceof self) {
            return $this->highResolution->elapsedSince($point->highResolution);
        }

        return ElapsedPeriod::of($this->milliseconds() - $point->milliseconds());
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

    public function toString(): string
    {
        return $this->point->toString();
    }
}
