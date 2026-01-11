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

    private function __construct(\DateTimeImmutable $date)
    {
        /** @var int<1, 31> */
        $day = (int) $date->format('j');

        $this->day = $day;
        $this->week = Calendar\Day::of((int) $date->format('w'));
        /** @var int<0, 365> */
        $this->ofYear = (int) $date->format('z');
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

    #[\NoDiscard]
    public function ofWeek(): Calendar\Day
    {
        return $this->week;
    }

    /**
     * @return int<0, 365>
     */
    #[\NoDiscard]
    public function ofYear(): int
    {
        return $this->ofYear;
    }

    /**
     * @return 24
     */
    #[\NoDiscard]
    public function numberOfHours(): int
    {
        return 24;
    }

    /**
     * @return int<1, 31>
     */
    #[\NoDiscard]
    public function ofMonth(): int
    {
        return $this->day;
    }
}
