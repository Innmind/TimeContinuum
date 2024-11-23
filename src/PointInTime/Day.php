<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\PointInTime;

use Innmind\TimeContinuum\Calendar;

/**
 * @psalm-immutable
 */
final class Day
{
    /** @var int<1, 31> */
    private int $day;
    private Calendar\Day $week;
    /** @var int<0, 365> */
    private int $ofYear;

    /**
     * @param int<1, 31> $day
     */
    private function __construct(Year $year, Month $month, int $day)
    {
        $this->day = $day;
        $this->week = Calendar\Day::of((int) \date(
            'w',
            $time = \mktime(0, 0, 0, $month->ofYear()->toInt(), $day, $year->toInt()),
        ));
        /** @var int<0, 365> */
        $this->ofYear = (int) \date('z', $time);
    }

    /**
     * @psalm-pure
     * @internal
     *
     * @param int<1, 31> $day
     */
    public static function of(Year $year, Month $month, int $day): self
    {
        return new self($year, $month, $day);
    }

    public function ofWeek(): Calendar\Day
    {
        return $this->week;
    }

    /**
     * @return int<0, 365>
     */
    public function ofYear(): int
    {
        return $this->ofYear;
    }

    /**
     * @return 24
     */
    public function numberOfHours(): int
    {
        return 24;
    }

    /**
     * @return int<1, 31>
     */
    public function toInt(): int
    {
        // todo rename to ofMonth
        return $this->day;
    }
}
