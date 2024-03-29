<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Period;

use Innmind\TimeContinuum\{
    Period,
    Earth\ElapsedPeriod,
    Exception\PeriodCantBeNegative,
};

/**
 * @psalm-immutable
 */
final class Hour implements Period
{
    private int $day;
    private int $hour;

    public function __construct(int $hour)
    {
        if ($hour < 0) {
            throw new PeriodCantBeNegative((string) $hour);
        }

        $this->day = (int) ($hour / 24);
        $this->hour = $hour % 24;
    }

    /**
     * @param 0|positive-int $hour
     */
    public static function of(int $hour): self
    {
        return new self($hour);
    }

    public function years(): int
    {
        return 0;
    }

    public function months(): int
    {
        return 0;
    }

    public function days(): int
    {
        return $this->day;
    }

    public function hours(): int
    {
        return $this->hour;
    }

    public function minutes(): int
    {
        return 0;
    }

    public function seconds(): int
    {
        return 0;
    }

    public function milliseconds(): int
    {
        return 0;
    }

    public function equals(Period $period): bool
    {
        return $period->years() === 0 &&
            $period->months() === 0 &&
            $period->days() === $this->day &&
            $period->hours() === $this->hour &&
            $period->minutes() === 0 &&
            $period->seconds() === 0 &&
            $period->milliseconds() === 0;
    }

    public function add(Period $period): Composite
    {
        return new Composite(
            $period->years(),
            $period->months(),
            $this->day + $period->days(),
            $this->hour + $period->hours(),
            $period->minutes(),
            $period->seconds(),
            $period->milliseconds(),
        );
    }

    public function asElapsedPeriod(): ElapsedPeriod
    {
        return ElapsedPeriod::ofPeriod($this);
    }
}
