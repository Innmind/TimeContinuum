<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Move;

use Innmind\TimeContinuum\{
    PointInTimeInterface,
    Earth\Period\Day,
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
