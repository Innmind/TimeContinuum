<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Move;

use Innmind\TimeContinuum\{
    PointInTime,
    Period,
};

final class StartOfYear
{
    #[\NoDiscard]
    public function __invoke(PointInTime $point): PointInTime
    {
        return (new StartOfMonth)($point)->goBack(
            Period::month($point->month()->ofYear()->toInt() - 1),
        );
    }
}
