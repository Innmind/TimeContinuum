<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Period;

/**
 * @psalm-immutable
 */
enum Value
{
    case minute;
    case hour;
    case day;

    /**
     * Returns the number of seconds contained in the number of  minutes, hours
     * and days
     *
     * @param int<0, max> $number
     *
     * @return int<0, max>
     */
    public function seconds(int $number): int
    {
        return match ($this) {
            self::minute => $number * 60,
            self::hour => $number * self::minute->seconds(60),
            self::day => $number * self::hour->seconds(24),
        };
    }
}
