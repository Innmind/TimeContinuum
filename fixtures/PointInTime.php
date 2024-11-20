<?php
declare(strict_types = 1);

namespace Fixtures\Innmind\TimeContinuum;

use Innmind\TimeContinuum\PointInTime as Model;
use Innmind\BlackBox\Set;

final class PointInTime
{
    /**
     * @return Set<Model>
     */
    public static function any(): Set
    {
        return self::yearRange(0, 9999);
    }

    /**
     * @param string $point String representation of a date
     * @return Set<Model>
     */
    public static function after(string $point): Set
    {
        $lower = Model::at($point);

        return self::yearRange($lower->year()->toInt(), 9999)->filter(static function($point) use ($lower): bool {
            return $point->aheadOf($lower);
        });
    }

    /**
     * @param string $point String representation of a date
     * @return Set<Model>
     */
    public static function before(string $point): Set
    {
        $upper = Model::at($point);

        return self::yearRange(0, $upper->year()->toInt())->filter(static function($point) use ($upper): bool {
            return $upper->aheadOf($point);
        });
    }

    /**
     * @return Set<Model>
     */
    private static function yearRange(int $lowerBound, int $upperBound): Set
    {
        return Set\Composite::immutable(
            static function(
                int $year,
                int $month,
                int $day,
                int $hour,
                int $minute,
                int $second,
                string $offsetDirection,
                int $hourOffset,
                string $minuteOffset,
            ): Model {
                return Model::at("$year-$month-{$day}T$hour:$minute:$second$offsetDirection$hourOffset:$minuteOffset");
            },
            Set\Integers::between($lowerBound, $upperBound),
            Set\Integers::between(1, 12),
            Set\Integers::between(1, 31),
            Set\Integers::between(0, 23),
            Set\Integers::between(0, 59),
            Set\Integers::between(0, 59),
            Set\Elements::of('-', '+'),
            Set\Integers::between(0, 12),
            Set\Elements::of('00', '15', '30', '45'),
        )->take(100);
    }
}
