<?php
declare(strict_types = 1);

namespace Fixtures\Innmind\TimeContinuum;

use Innmind\TimeContinuum\{
    Timezone as Model,
    Timezones,
    Offset,
};
use Innmind\BlackBox\Set;

final class Timezone
{
    /**
     * @return Set\Provider<callable(Timezones): Model>
     */
    public static function any(): Set\Provider
    {
        return Set::compose(
            static fn($offset, $daylight) => static fn(Timezones $timezones) => Model::of(
                $offset,
                $daylight,
            ),
            Set::either(
                Set::compose(
                    Offset::plus(...),
                    Set::integers()->between(0, 14),
                    Set::of(0, 15, 30, 45),
                ),
                Set::compose(
                    Offset::minus(...),
                    Set::integers()->between(0, 12),
                    Set::of(0, 15, 30, 45),
                ),
            ),
            Set::of(true, false),
        );
    }
}
