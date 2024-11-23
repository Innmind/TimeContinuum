<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\PointInTime;

/**
 * @psalm-immutable
 */
final class Day
{
    /** @var int<1, 31> */
    private int $day;
    /** @var int<0, 6> */
    private int $week;
    /** @var int<0, 365> */
    private int $ofYear;
    /** @var 'Monday'|'Tuesday'|'Wednesday'|'Thursday'|'Friday'|'Saturday'|'Sunday' */
    private string $string;

    /**
     * @param int<1, 31> $day
     */
    private function __construct(Year $year, Month $month, int $day)
    {
        $this->day = $day;
        /** @var int<0, 6> */
        $this->week = (int) \date(
            'w',
            $time = \mktime(0, 0, 0, $month->calendar()->toInt(), $day, $year->toInt()),
        );
        /** @var int<0, 365> */
        $this->ofYear = (int) \date('z', $time);
        /** @var 'Monday'|'Tuesday'|'Wednesday'|'Thursday'|'Friday'|'Saturday'|'Sunday' */
        $this->string = \date('l', $time);
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

    /**
     * @return int<0, 6>
     */
    public function weekNumber(): int
    {
        // todo move to the Day\Week enum
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

    /**
     * @return 'Monday'|'Tuesday'|'Wednesday'|'Thursday'|'Friday'|'Saturday'|'Sunday'
     */
    public function toString(): string
    {
        // todo transform into an enum
        return $this->string;
    }
}
