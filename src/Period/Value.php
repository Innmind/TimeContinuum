<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Period;

/**
 * @psalm-immutable
 */
enum Value
{
    case second;
    case minute;
    case hour;
    case day;

    /**
     * Returns the number of milliseconds contained in the number of seconds,
     * minutes, hours and days
     */
    public function milliseconds(int $number): int
    {
        return match ($this) {
            self::second => $number * 1000,
            self::minute => $number * self::second->milliseconds(60),
            self::hour => $number * self::minute->milliseconds(60),
            self::day => $number * self::hour->milliseconds(24),
        };
    }
}
