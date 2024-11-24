<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\PointInTime;

/**
 * @psalm-immutable
 */
final class Year
{
    private int $year;
    /** @var 365|366 */
    private int $days;

    private function __construct(int $year)
    {
        $this->year = $year;
        /** @var 365|366 */
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
     * @return 365|366
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
}
