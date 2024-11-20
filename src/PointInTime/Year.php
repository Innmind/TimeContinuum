<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\PointInTime;

/**
 * @psalm-immutable
 */
final class Year
{
    private int $year;
    /** @var int<0, 365> */
    private int $days;

    private function __construct(int $year)
    {
        $this->year = $year;
        /** @var int<0, 365> */
        $this->days = (int) \date('z', \mktime(0, 0, 0, 12, 31, $year)) + 1;
    }

    /**
     * @psalm-pure
     * @internal
     */
    public static function of(int $year): self
    {
        return new self($year);
    }

    /**
     * @return int<0, 365>
     */
    public function numberOfDays(): int
    {
        return $this->days;
    }

    /**
     * @return 12
     */
    public function numberOfMonths(): int
    {
        return 12;
    }

    public function toInt(): int
    {
        return $this->year;
    }

    /**
     * @return non-empty-string
     */
    public function toString(): string
    {
        return (string) $this->year;
    }
}