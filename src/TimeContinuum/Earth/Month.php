<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\TimeContinuum\Earth;

use Innmind\TimeContinuum\{
    TimeContinuum\MonthInterface,
    Exception\InvalidArgumentException,
};

final class Month implements MonthInterface
{
    private $month;
    private $days;
    private $string;

    public function __construct(Year $year, int $month)
    {
        if ($month < 1 || $month > 12) {
            throw new InvalidArgumentException;
        }

        $this->month = $month;
        $this->days = (int) date(
            't',
            $time = mktime(0, 0, 0, $month, 1, $year->toInt())
        );
        $this->string = date('F', $time);
    }

    public function numberOfDays(): int
    {
        return $this->days;
    }

    public function toInt(): int
    {
        return $this->month;
    }

    public function __toString(): string
    {
        return $this->string;
    }
}
