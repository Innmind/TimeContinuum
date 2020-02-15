<?php
declare(strict_types = 1);

namespace Fixtures\Innmind\TimeContinuum\Earth;

use Innmind\TimeContinuum\Earth\Period\Composite;
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
}
