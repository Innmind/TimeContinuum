<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Clock;

use Innmind\TimeContinuum\{
    Clock\Month as MonthInterface,
    Exception\DomainException,
};

final class Month implements MonthInterface
{
    private $month;
    private $days;
    private $string;

    public function __construct(Year $year, int $month)
    {
        if ($month < 1 || $month > 12) {
            throw new DomainException((string) $month);
        }

        $this->month = $month;
        $this->days = (int) \date(
            't',
            $time = \mktime(0, 0, 0, $month, 1, $year->toInt())
        );
        $this->string = \date('F', $time);
    }

    public function numberOfDays(): int
    {
        return $this->days;
    }

    public function toInt(): int
    {
        return $this->month;
    }

    public function toString(): string
    {
        return $this->string;
    }
}
