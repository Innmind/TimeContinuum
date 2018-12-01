<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Move\Earth;

use Innmind\TimeContinuum\{
    PointInTimeInterface,
    Period\Earth\Day,
};

final class EndOfMonth
{
    public function __invoke(PointInTimeInterface $point): PointInTimeInterface
    {
        return (new EndOfDay)($point)->goForward(
            new Day($point->month()->numberOfDays() - $point->day()->toInt())
        );
    }
}
