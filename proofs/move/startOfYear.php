<?php
declare(strict_types = 1);

use Innmind\TimeContinuum\{
    Clock,
    Move\StartOfYear,
};
use Fixtures\Innmind\TimeContinuum\PointInTime;
use Innmind\BlackBox\Set;

return static function() {
    yield proof(
        'Start of year',
        given(Set::either(
            PointInTime::any(),
            Set::call(static fn() => Clock::live()->now()),
        )),
        static function($assert, $point) {
            $startOfYear = (new StartOfYear)($point);

            $assert->same(
                $point->year()->toInt(),
                $startOfYear->year()->toInt(),
            );
            $assert->same(
                1,
                $startOfYear->month()->ofYear()->toInt(),
            );
            $assert->same(
                1,
                $startOfYear->day()->ofMonth(),
            );
            $assert->same(
                0,
                $startOfYear->hour()->toInt(),
            );
            $assert->same(
                0,
                $startOfYear->minute()->toInt(),
            );
            $assert->same(
                0,
                $startOfYear->second()->toInt(),
            );
            $assert->same(
                0,
                $startOfYear->millisecond()->toInt(),
            );
            $assert->same(
                0,
                $startOfYear->microsecond()->toInt(),
            );
        },
    );
};
