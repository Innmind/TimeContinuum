<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Clock;

use Innmind\TimeContinuum\Clock\Year as YearInterface;

final class Year implements YearInterface
{
    private $year;
    private $days;

    public function __construct(int $year)
    {
        $this->year = $year;
        $this->days = (int) \date('z', \mktime(0, 0, 0, 12, 31, $year)) + 1;
    }

    public function numberOfDays(): int
    {
        return $this->days;
    }

    public function toInt(): int
    {
        return $this->year;
    }

    public function __toString(): string
    {
        return (string) $this->year;
    }
}
