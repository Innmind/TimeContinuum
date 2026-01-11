<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Move;

use Innmind\TimeContinuum\{
    PointInTime,
    Period,
};

final class StartOfDay
{
    #[\NoDiscard]
    public function __invoke(PointInTime $point): PointInTime
    {
        return $point->goBack(
            Period::hour($point->hour()->toInt())
                ->add(Period::minute($point->minute()->toInt()))
                ->add(Period::second($point->second()->toInt()))
                ->add(Period::millisecond($point->millisecond()->toInt()))
                ->add(Period::microsecond($point->microsecond()->toInt())),
        );
    }
}
