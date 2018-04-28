<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Move\Earth;

use Innmind\TimeContinuum\{
    PointInTimeInterface,
    Period\Earth\Month
};

final class EndOfYear
{
    public function __invoke(PointInTimeInterface $point): PointInTimeInterface
    {
        $point = (new StartOfMonth)($point)->goForward(
            new Month(12 - $point->month()->toInt())
        );

        return (new EndOfMonth)($point);
    }
}
