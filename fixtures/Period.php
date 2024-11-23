<?php
declare(strict_types = 1);

namespace Fixtures\Innmind\TimeContinuum;

use Innmind\TimeContinuum\Period as Model;
use Innmind\BlackBox\Set;

final class Period
{
    /**
     * @return Set<Model>
     */
    public static function any(): Set
    {
        return Set\Composite::immutable(
            Model::of(...),
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
     * @return Set<Model>
     */
    public static function anyNumberOfYear(): Set
    {
        return Set\Decorate::immutable(
            Model::year(...),
            Set\Integers::between(0, 9999),
        )->take(100);
    }

    /**
     * @return Set<Model>
     */
    public static function lessThanAYear(): Set
    {
        return Set\Composite::immutable(
            static function($day, $hour, $minute, $second, $millisecond): Model {
                return Model::of(
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
