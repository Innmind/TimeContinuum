<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Move\Earth;

use Innmind\TimeContinuum\{
    PointInTimeInterface,
    Period\Earth\Day,
};

final class StartOfMonth
{
    public function __invoke(PointInTimeInterface $point): PointInTimeInterface
    {
        return (new StartOfDay)($point)->goBack(
            new Day($point->day()->toInt() - 1)
        );
    }
}
