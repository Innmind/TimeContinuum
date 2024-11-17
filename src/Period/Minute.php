<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Period;

use Innmind\TimeContinuum\Period;

final class Minute
{
    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @param 0|positive-int $minute
     */
    public static function of(int $minute): Period
    {
        /** @var int<0, max> */
        $hour = (int) ($minute / 60);
        $hour = Hour::of($hour);
        $minute = $minute % 60;

        return Period::of(
            $hour->years(),
            $hour->months(),
            $hour->days(),
            $hour->hours(),
            $minute,
            0,
            0,
        );
    }
}
