<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Period;

use Innmind\TimeContinuum\Period;

final class Year
{
    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @param 0|positive-int $year
     */
    public static function of(int $year): Period
    {
        return Period::of(
            $year,
            0,
            0,
            0,
            0,
            0,
            0,
        );
    }
}
