<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Period;

use Innmind\TimeContinuum\Period;

final class Second
{
    /**
     * @psalm-pure
     *
     * @param 0|positive-int $second
     */
    public static function of(int $second): Period
    {
        /** @var int<0, max> */
        $minute = (int) ($second / 60);
        $minute = Minute::of($minute);
        $second = $second % 60;

        return Period::of(
            $minute->years(),
            $minute->months(),
            $minute->days(),
            $minute->hours(),
            $minute->minutes(),
            $second,
            0,
        );
    }
}
