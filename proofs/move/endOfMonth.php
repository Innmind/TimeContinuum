<?php
declare(strict_types = 1);

use Innmind\TimeContinuum\{
    Clock,
    Move\EndOfMonth,
    Format,
};
use Fixtures\Innmind\TimeContinuum\PointInTime;
use Innmind\BlackBox\Set;

return static function() {
    yield proof(
        'End of month',
        given(Set::either(
            PointInTime::any(),
            Set::call(static fn() => Clock::live()->now()),
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
            $assert->same(
                999,
                $endOfMonth->microsecond()->toInt(),
            );
        },
    );

    yield test(
        'End of month regression',
        static function($assert) {
            $point = Clock::live()
                ->at(
                    '0100-02-27T18:35:40.134853+01:00',
                    Format::of('Y-m-d\TH:i:s.uP'),
                )
                ->match(
                    static fn($point) => $point,
                    static fn() => null,
                );

            $assert->object($point);

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
            $assert->same(
                999,
                $endOfMonth->microsecond()->toInt(),
            );
        },
    );
};
