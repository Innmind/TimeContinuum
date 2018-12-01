<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Move\Earth;

use Innmind\TimeContinuum\{
    PointInTimeInterface,
    Period\Earth\Month,
};

final class StartOfYear
{
    public function __invoke(PointInTimeInterface $point): PointInTimeInterface
    {
        return (new StartOfMonth)($point)->goBack(
            new Month($point->month()->toInt() - 1)
        );
    }
}
