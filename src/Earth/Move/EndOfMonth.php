<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Move;

use Innmind\TimeContinuum\{
    PointInTimeInterface,
    Earth\Period\Day,
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
