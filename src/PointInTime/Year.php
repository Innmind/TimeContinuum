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
        $this->days = ((int) (new \DateTimeImmutable("{$year}-12-31T00:00:00"))->format('z')) + 1;
    }

    /**
     * @psalm-pure
     * @internal
     */
    #[\NoDiscard]
    public static function of(int $year): self
    {
        return new self($year);
    }

    /**
     * @return 365|366
     */
    #[\NoDiscard]
    public function numberOfDays(): int
    {
        return $this->days;
    }

    /**
     * @return 12
     */
    #[\NoDiscard]
    public function numberOfMonths(): int
    {
        return 12;
    }

    #[\NoDiscard]
    public function toInt(): int
    {
        return $this->year;
    }
}
