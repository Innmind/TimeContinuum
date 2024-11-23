<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Period;

use Innmind\TimeContinuum\Period;

final class Millisecond
{
    /**
     * @psalm-pure
     *
     * @param 0|positive-int $millisecond
     */
    public static function of(int $millisecond): Period
    {
        /** @var int<0, max> */
        $second = (int) ($millisecond / 1000);
        $second = Second::of($second);
        $millisecond = $millisecond % 1000;

        return Period::of(
            $second->years(),
            $second->months(),
            $second->days(),
            $second->hours(),
            $second->minutes(),
            $second->seconds(),
            $millisecond,
        );
    }
}
