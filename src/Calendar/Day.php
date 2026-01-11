<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Calendar;

/**
 * @psalm-immutable
 */
enum Day
{
    case monday;
    case tuesday;
    case wednesday;
    case thursday;
    case friday;
    case saturday;
    case sunday;

    /**
     * @psalm-pure
     * @internal
     */
    #[\NoDiscard]
    public static function of(int $index): self
    {
        return match ($index) {
            1 => self::monday,
            2 => self::tuesday,
            3 => self::wednesday,
            4 => self::thursday,
            5 => self::friday,
            6 => self::saturday,
            0 => self::sunday,
        };
    }

    /**
     * @return int<0, 6>
     */
    #[\NoDiscard]
    public function toInt(): int
    {
        return match ($this) {
            self::monday => 1,
            self::tuesday => 2,
            self::wednesday => 3,
            self::thursday => 4,
            self::friday => 5,
            self::saturday => 6,
            self::sunday => 0,
        };
    }
}
