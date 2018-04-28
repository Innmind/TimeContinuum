<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Move\Earth;

use Innmind\TimeContinuum\{
    PointInTimeInterface,
    Period\Earth\Day,
    Period\Earth\Hour,
    Period\Earth\Minute,
    Period\Earth\Second,
    Period\Earth\Millisecond
};

final class StartOfMonth
{
    public function __invoke(PointInTimeInterface $point): PointInTimeInterface
    {
        return $point->goBack(
            (new Day($point->day()->toInt() - 1))
                ->add(new Hour($point->hour()->toInt()))
                ->add(new Minute($point->minute()->toInt()))
                ->add(new Second(max($point->second()->toInt() - 1, 0)))
                ->add(new Millisecond($point->millisecond()->toInt()))
        );
    }
}
