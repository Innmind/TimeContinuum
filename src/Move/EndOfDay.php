<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Move;

use Innmind\TimeContinuum\{
    PointInTime,
    Period,
};

final class EndOfDay
{
    public function __invoke(PointInTime $point): PointInTime
    {
        return $point->goForward(
            Period::hour(23 - $point->hour()->toInt())
                ->add(Period::minute(59 - $point->minute()->toInt()))
                ->add(Period::second(59 - $point->second()->toInt()))
                ->add(Period::millisecond(999 - $point->millisecond()->toInt())),
        );
    }
}
