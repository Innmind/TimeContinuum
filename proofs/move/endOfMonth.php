<?php
declare(strict_types = 1);

use Innmind\TimeContinuum\{
    Clock,
    Move\EndOfMonth,
};
use Fixtures\Innmind\TimeContinuum\PointInTime;
use Innmind\BlackBox\Set;

return static function() {
    yield proof(
        'End of month',
        given(Set\Either::any(
            PointInTime::any(),
            Set\Call::of(static fn() => Clock::live()->now()),
        )),
        static function($assert, $point) {
            $endOfMonth = (new EndOfMonth)($point);

            $assert->same(
                $point->year()->toInt(),
                $endOfMonth->year()->toInt(),
            );
            $assert->same(
                $point->month()->ofYear(),
                $endOfMonth->month()->ofYear(),
            );
            $assert->same(
                $point->month()->numberOfDays(),
                $endOfMonth->day()->ofMonth(),
            );
            $assert->same(
                23,
                $endOfMonth->hour()->toInt(),
            );
            $assert->same(
                59,
                $endOfMonth->minute()->toInt(),
            );
            $assert->same(
                59,
                $endOfMonth->second()->toInt(),
            );
            $assert->same(
                999,
                $endOfMonth->millisecond()->toInt(),
            );
        },
    );
};
