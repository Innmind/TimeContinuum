<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Period;

use Innmind\TimeContinuum\Period;

final class Hour
{
    /**
     * @psalm-pure
     *
     * @param 0|positive-int $hour
     */
    public static function of(int $hour): Period
    {
        /** @var int<0, max> */
        $day = (int) ($hour / 24);
        $hour = $hour % 24;

        return Period::of(
            0,
            0,
            $day,
            $hour,
            0,
            0,
            0,
        );
    }
}
