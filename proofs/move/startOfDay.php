<?php
declare(strict_types = 1);

use Innmind\TimeContinuum\{
    Clock,
    Move\StartOfDay,
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
            $startOfDay = (new StartOfDay)($point);

            $assert->same(
                $point->year()->toInt(),
                $startOfDay->year()->toInt(),
            );
            $assert->same(
                $point->month()->ofYear(),
                $startOfDay->month()->ofYear(),
            );
            $assert->same(
                $point->day()->ofMonth(),
                $startOfDay->day()->ofMonth(),
            );
            $assert->same(
                0,
                $startOfDay->hour()->toInt(),
            );
            $assert->same(
                0,
                $startOfDay->minute()->toInt(),
            );
            $assert->same(
                0,
                $startOfDay->second()->toInt(),
            );
            $assert->same(
                0,
                $startOfDay->millisecond()->toInt(),
            );
            $assert->same(
                0,
                $startOfDay->microsecond()->toInt(),
            );
        },
    );
};
