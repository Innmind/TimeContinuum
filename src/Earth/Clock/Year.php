<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Clock;

use Innmind\TimeContinuum\Clock\Year as YearInterface;

final class Year implements YearInterface
{
    private int $year;
    private int $days;

    public function __construct(int $year)
    {
        $this->year = $year;
        $this->days = (int) \date('z', \mktime(0, 0, 0, 12, 31, $year)) + 1;
    }

    public function numberOfDays(): int
    {
        return $this->days;
    }

    public function numberOfMonths(): int
    {
        return 12;
    }

    public function toInt(): int
    {
        return $this->year;
    }

    public function toString(): string
    {
        return (string) $this->year;
    }
}
