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

    private function __construct(\DateTimeImmutable $date)
    {
        $this->month = Calendar\Month::of((int) $date->format('n'));
        /** @var int<28, 31> */
        $this->days = (int) $date->format('t');
    }

    /**
     * @psalm-pure
     * @internal
     */
    #[\NoDiscard]
    public static function of(\DateTimeImmutable $date): self
    {
        return new self($date);
    }

    /**
     * @return int<28, 31>
     */
    #[\NoDiscard]
    public function numberOfDays(): int
    {
        return $this->days;
    }

    #[\NoDiscard]
    public function ofYear(): Calendar\Month
    {
        return $this->month;
    }
}
