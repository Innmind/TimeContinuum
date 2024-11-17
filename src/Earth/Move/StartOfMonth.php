<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Move;

use Innmind\TimeContinuum\{
    PointInTime,
    Period\Day,
};

final class StartOfMonth
{
    public function __invoke(PointInTime $point): PointInTime
    {
        return (new StartOfDay)($point)->goBack(
            Day::of($point->day()->toInt() - 1),
        );
    }
}
