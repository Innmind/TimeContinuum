<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Period;

use Innmind\TimeContinuum\Period;

final class Day
{
    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @param 0|positive-int $day
     */
    public static function of(int $day): Period
    {
        return Period::of(
            0,
            0,
            $day,
            0,
            0,
            0,
            0,
        );
    }
}
