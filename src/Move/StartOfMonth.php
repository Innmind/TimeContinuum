<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Move;

use Innmind\TimeContinuum\{
    PointInTime,
    Period,
};

/**
 * @psalm-immutable
 */
final class StartOfMonth
{
    #[\NoDiscard]
    public function __invoke(PointInTime $point): PointInTime
    {
        return (new StartOfDay)($point)->goBack(
            Period::day($point->day()->ofMonth() - 1),
        );
    }
}
