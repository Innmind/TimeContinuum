<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\PointInTime;

/**
 * @psalm-immutable
 */
final class Month
{
    /** @var int<1, 12> */
    private int $month;
    /** @var int<28, 31> */
    private int $days;
    /** @var 'January'|'February'|'March'|'April'|'May'|'June'|'July'|'August'|'September'|'October'|'November'|'December' */
    private string $string;

    /**
     * @param int<1, 12> $month
     */
    private function __construct(Year $year, int $month)
    {
        // todo transform into an enum
        $this->month = $month;
        /** @var int<28, 31> */
        $this->days = (int) \date(
            't',
            $time = \mktime(0, 0, 0, $month, 1, $year->toInt()),
        );
        /** @var 'January'|'February'|'March'|'April'|'May'|'June'|'July'|'August'|'September'|'October'|'November'|'December' */
        $this->string = \date('F', $time);
    }

    /**
     * @psalm-pure
     * @internal
     *
     * @param int<1, 12> $month
     */
    public static function of(Year $year, int $month): self
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

    /**
     * @return int<1, 12>
     */
    public function toInt(): int
    {
        return $this->month;
    }

    /**
     * @return 'January'|'February'|'March'|'April'|'May'|'June'|'July'|'August'|'September'|'October'|'November'|'December'
     */
    public function toString(): string
    {
        return $this->string;
    }
}
