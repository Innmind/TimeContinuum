<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Move;

use Innmind\TimeContinuum\{
    PointInTime,
    Period\Month,
};

final class EndOfYear
{
    public function __invoke(PointInTime $point): PointInTime
    {
        $point = (new StartOfMonth)($point)->goForward(
            Month::of(12 - $point->month()->toInt()),
        );

        return (new EndOfMonth)($point);
    }
}
