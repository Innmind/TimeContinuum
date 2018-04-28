<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Move\Earth;

use Innmind\TimeContinuum\{
    PointInTimeInterface,
    Period\Earth\Hour,
    Period\Earth\Minute,
    Period\Earth\Second,
    Period\Earth\Millisecond
};

final class EndOfDay
{
    public function __invoke(PointInTimeInterface $point): PointInTimeInterface
    {
        return $point->goForward(
            (new Hour(23 - $point->hour()->toInt()))
                ->add(new Minute(59 - $point->minute()->toInt()))
                ->add(new Second(59 - $point->second()->toInt()))
                ->add(new Millisecond(999 - $point->millisecond()->toInt()))
        );
    }
}
