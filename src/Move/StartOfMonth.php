<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Move;

use Innmind\TimeContinuum\{
    PointInTime,
    Period,
};

final class StartOfMonth
{
    public function __invoke(PointInTime $point): PointInTime
    {
        return (new StartOfDay)($point)->goBack(
            Period::day($point->day()->ofMonth() - 1),
        );
    }
}
