<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Period;

use Innmind\TimeContinuum\{
    PeriodInterface,
    Exception\PeriodCantBeNegativeException,
};

final class Hour implements PeriodInterface
{
    private $day;
    private $hour;

    public function __construct(int $hour)
    {
        if ($hour < 0) {
            throw new PeriodCantBeNegativeException;
        }

        $this->day = (int) ($hour / 24);
        $this->hour = $hour % 24;
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

    public function equals(PeriodInterface $period): bool
    {
        return $period->years() === 0 &&
            $period->months() === 0 &&
            $period->days() === $this->day &&
            $period->hours() === $this->hour &&
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
            $this->hour + $period->hours(),
            $period->minutes(),
            $period->seconds(),
            $period->milliseconds()
        );
    }
}
