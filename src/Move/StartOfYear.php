<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Move;

use Innmind\TimeContinuum\{
    PointInTime,
    Period\Month,
};

final class StartOfYear
{
    public function __invoke(PointInTime $point): PointInTime
    {
        return (new StartOfMonth)($point)->goBack(
            Month::of($point->month()->ofYear()->toInt() - 1),
        );
    }
}
