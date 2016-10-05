<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\TimeContinuum\Earth;

use Innmind\TimeContinuum\{
    TimeContinuum\DayInterface,
    Exception\InvalidArgumentException
};

final class Day implements DayInterface
{
    private $day;
    private $week;
    private $string;

    public function __construct(Year $year, Month $month, int $day)
    {
        if ($day < 1 || $day > 31) {
            throw new InvalidArgumentException;
        }

        $this->day = $day;
        $this->week = (int) date(
            'w',
            $time = mktime(0, 0, 0, $month->toInt(), $day, $year->toInt())
        );
        $this->string = date('l', $time);
    }

    public function weekNumber(): int
    {
        return $this->week;
    }

    public function toInt(): int
    {
        return $this->day;
    }

    public function __toString(): string
    {
        return $this->string;
    }
}
