<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Move;

use Innmind\TimeContinuum\{
    PointInTime,
    Earth\Period\Day,
};

final class StartOfMonth
{
    public function __invoke(PointInTime $point): PointInTime
    {
        return (new StartOfDay)($point)->goBack(
            new Day($point->day()->toInt() - 1)
        );
    }
}
