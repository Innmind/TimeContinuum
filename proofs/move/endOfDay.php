<?php
declare(strict_types = 1);

use Innmind\TimeContinuum\{
    Clock,
    Move\EndOfDay,
};
use Fixtures\Innmind\TimeContinuum\PointInTime;
use Innmind\BlackBox\Set;

return static function() {
    yield proof(
        'End of day',
        given(Set\Either::any(
            PointInTime::any(),
            Set\Call::of(static fn() => Clock::live()->now()),
        )),
        static function($assert, $point) {
            $endOfDay = (new EndOfDay)($point);

            $assert->same(
                $point->year()->toInt(),
                $endOfDay->year()->toInt(),
            );
            $assert->same(
                $point->month()->ofYear(),
                $endOfDay->month()->ofYear(),
            );
            $assert->same(
                $point->day()->ofMonth(),
                $endOfDay->day()->ofMonth(),
            );
            $assert->same(
                23,
                $endOfDay->hour()->toInt(),
            );
            $assert->same(
                59,
                $endOfDay->minute()->toInt(),
            );
            $assert->same(
                59,
                $endOfDay->second()->toInt(),
            );
            $assert->same(
                999,
                $endOfDay->millisecond()->toInt(),
            );
            $assert->same(
                999,
                $endOfDay->microsecond()->toInt(),
            );
        },
    );
};
