<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Calendar;

/**
 * @psalm-immutable
 */
enum Month
{
    case january;
    case february;
    case march;
    case april;
    case may;
    case june;
    case july;
    case august;
    case september;
    case october;
    case november;
    case december;

    /**
     * @psalm-pure
     * @internal
     */
    public static function of(int $index): self
    {
        return match ($index) {
            1 => self::january,
            2 => self::february,
            3 => self::march,
            4 => self::april,
            5 => self::may,
            6 => self::june,
            7 => self::july,
            8 => self::august,
            9 => self::september,
            10 => self::october,
            11 => self::november,
            12 => self::december,
        };
    }

    /**
     * @return int<1, 12>
     */
    public function toInt(): int
    {
        return match ($this) {
            self::january => 1,
            self::february => 2,
            self::march => 3,
            self::april => 4,
            self::may => 5,
            self::june => 6,
            self::july => 7,
            self::august => 8,
            self::september => 9,
            self::october => 10,
            self::november => 11,
            self::december => 12,
        };
    }
}
