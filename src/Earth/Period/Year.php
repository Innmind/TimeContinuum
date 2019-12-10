<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Period;

use Innmind\TimeContinuum\{
    Period,
    Exception\PeriodCantBeNegative,
};

final class Year implements Period
{
    private int $year;

    public function __construct(int $year)
    {
        if ($year < 0) {
            throw new PeriodCantBeNegative((string) $year);
        }

        $this->year = $year;
    }

    public function years(): int
    {
        return $this->year;
    }

    public function months(): int
    {
        return 0;
    }

    public function days(): int
    {
        return 0;
    }

    public function hours(): int
    {
        return 0;
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
        return $period->years() === $this->year &&
            $period->months() === 0 &&
            $period->days() === 0 &&
            $period->hours() === 0 &&
            $period->minutes() === 0 &&
            $period->seconds() === 0 &&
            $period->milliseconds() === 0;
    }

    public function add(Period $period): Period
    {
        return new Composite(
            $this->year + $period->years(),
            $period->months(),
            $period->days(),
            $period->hours(),
            $period->minutes(),
            $period->seconds(),
            $period->milliseconds(),
        );
    }
}
