<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Clock;

use Innmind\TimeContinuum\{
    Clock\Day as DayInterface,
    Exception\DomainException,
};

/**
 * @psalm-immutable
 */
final class Day implements DayInterface
{
    private int $day;
    private int $week;
    private int $ofYear;
    private string $string;

    public function __construct(Year $year, Month $month, int $day)
    {
        if ($day < 1 || $day > 31) {
            throw new DomainException((string) $day);
        }

        $this->day = $day;
        $this->week = (int) \date(
            'w',
            $time = \mktime(0, 0, 0, $month->toInt(), $day, $year->toInt()),
        );
        $this->ofYear = (int) \date('z', $time);
        $this->string = \date('l', $time);
    }

    public function weekNumber(): int
    {
        return $this->week;
    }

    public function ofYear(): int
    {
        return $this->ofYear;
    }

    public function numberOfHours(): int
    {
        return 24;
    }

    public function toInt(): int
    {
        return $this->day;
    }

    public function toString(): string
    {
        return $this->string;
    }
}
