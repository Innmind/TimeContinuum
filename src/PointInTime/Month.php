<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\PointInTime;

use Innmind\TimeContinuum\Calendar;

/**
 * @psalm-immutable
 */
final class Month
{
    private Calendar\Month $month;
    /** @var int<28, 31> */
    private int $days;

    private function __construct(Year $year, Calendar\Month $month)
    {
        $this->month = $month;
        /** @var int<28, 31> */
        $this->days = (int) \date(
            't',
            \mktime(0, 0, 0, $month->toInt(), 1, $year->toInt()),
        );
    }

    /**
     * @psalm-pure
     * @internal
     */
    public static function of(Year $year, Calendar\Month $month): self
    {
        return new self($year, $month);
    }

    /**
     * @return int<28, 31>
     */
    public function numberOfDays(): int
    {
        return $this->days;
    }

    public function calendar(): Calendar\Month
    {
        return $this->month;
    }
}
