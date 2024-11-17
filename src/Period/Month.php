<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Period;

use Innmind\TimeContinuum\Period;

final class Month
{
    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @param 0|positive-int $month
     */
    public static function of(int $month): Period
    {
        /** @var int<0, max> */
        $year = (int) ($month / 12);
        $month = $month % 12;

        return Period::of(
            $year,
            $month,
            0,
            0,
            0,
            0,
            0,
        );
    }
}
