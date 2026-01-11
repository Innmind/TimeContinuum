<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Move;

use Innmind\TimeContinuum\{
    PointInTime,
    Period,
};

final class EndOfYear
{
    #[\NoDiscard]
    public function __invoke(PointInTime $point): PointInTime
    {
        $point = (new StartOfMonth)($point)->goForward(
            Period::month(12 - $point->month()->ofYear()->toInt()),
        );

        return (new EndOfMonth)($point);
    }
}
