<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Move;

use Innmind\TimeContinuum\{
    PointInTimeInterface,
    Earth\Period\Hour,
    Earth\Period\Minute,
    Earth\Period\Second,
    Earth\Period\Millisecond,
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
