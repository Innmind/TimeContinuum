<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Move;

use Innmind\TimeContinuum\{
    PointInTime,
    Period\Day,
};

final class EndOfMonth
{
    public function __invoke(PointInTime $point): PointInTime
    {
        /** @psalm-suppress InvalidArgument The negative values can only happen when working with 2 different points in time */
        return (new EndOfDay)($point)->goForward(
            Day::of($point->month()->numberOfDays() - $point->day()->toInt()),
        );
    }
}
