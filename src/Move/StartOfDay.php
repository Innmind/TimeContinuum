<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Move;

use Innmind\TimeContinuum\{
    PointInTime,
    Period\Hour,
    Period\Minute,
    Period\Second,
    Period\Millisecond,
};

final class StartOfDay
{
    public function __invoke(PointInTime $point): PointInTime
    {
        return $point->goBack(
            Hour::of($point->hour()->toInt())
                ->add(Minute::of($point->minute()->toInt()))
                ->add(Second::of($point->second()->toInt()))
                ->add(Millisecond::of($point->millisecond()->toInt())),
        );
    }
}
