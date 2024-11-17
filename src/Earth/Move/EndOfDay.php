<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Move;

use Innmind\TimeContinuum\{
    PointInTime,
    Period\Hour,
    Period\Minute,
    Period\Second,
    Period\Millisecond,
};

final class EndOfDay
{
    public function __invoke(PointInTime $point): PointInTime
    {
        return $point->goForward(
            Hour::of(23 - $point->hour()->toInt())
                ->add(Minute::of(59 - $point->minute()->toInt()))
                ->add(Second::of(59 - $point->second()->toInt()))
                ->add(Millisecond::of(999 - $point->millisecond()->toInt())),
        );
    }
}
