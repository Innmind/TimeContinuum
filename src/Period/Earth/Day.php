<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Period\Earth;

use Innmind\TimeContinuum\{
    PeriodInterface,
    Exception\PeriodCantBeNegativeException
};

final class Day implements PeriodInterface
{
    private $day;

    public function __construct(int $day)
    {
        if ($day < 0) {
            throw new PeriodCantBeNegativeException;
        }

        $this->day = $day;
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

    public function equals(PeriodInterface $period): bool
    {
        return $period->years() === 0 &&
            $period->months() === 0 &&
            $period->days() === $this->day &&
            $period->hours() === 0 &&
            $period->minutes() === 0 &&
            $period->seconds() === 0 &&
            $period->milliseconds() === 0;
    }

    public function add(PeriodInterface $period): PeriodInterface
    {
        return new Composite(
            $period->years(),
            $period->months(),
            $this->day + $period->days(),
            $period->hours(),
            $period->minutes(),
            $period->seconds(),
            $period->milliseconds()
        );
    }
}
