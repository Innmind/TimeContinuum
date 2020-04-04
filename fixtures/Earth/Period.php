<?php
declare(strict_types = 1);

namespace Fixtures\Innmind\TimeContinuum\Earth;

use Innmind\TimeContinuum\Earth\Period\{
    Composite,
    Year,
};
use Innmind\BlackBox\Set;

final class Period
{
    /**
     * @return Set<Composite>
     */
    public static function any(): Set
    {
        return Set\Composite::immutable(
            static function($year, $month, $day, $hour, $minute, $second, $millisecond): Composite {
                return new Composite(
                    $year,
                    $month,
                    $day,
                    $hour,
                    $minute,
                    $second,
                    $millisecond,
                );
            },
            Set\Integers::between(0, 9999),
            Set\Integers::between(0, 12),
            Set\Integers::between(0, 31),
            Set\Integers::between(0, 23),
            Set\Integers::between(0, 59),
            Set\Integers::between(0, 59),
            Set\Integers::between(0, 999),
        )->take(100);
    }

    /**
     * @return Set<Year>
     */
    public static function anyNumberOfYear(): Set
    {
        return Set\Decorate::immutable(
            static fn(int $year): Year => new Year($year),
            Set\Integers::between(0, 9999),
        )->take(100);
    }

    /**
     * @return Set<Composite>
     */
    public static function lessThanAYear(): Set
    {
        return Set\Composite::immutable(
            static function($day, $hour, $minute, $second, $millisecond): Composite {
                return new Composite(
                    0,
                    0,
                    $day,
                    $hour,
                    $minute,
                    $second,
                    $millisecond,
                );
            },
            Set\Integers::between(0, 364),
            Set\Integers::between(0, 23),
            Set\Integers::between(0, 59),
            Set\Integers::between(0, 59),
            Set\Integers::between(0, 999),
        )->take(100);
    }
}
