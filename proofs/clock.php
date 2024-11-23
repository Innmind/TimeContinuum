<?php
declare(strict_types = 1);

use Innmind\TimeContinuum\Clock;
use Fixtures\Innmind\TimeContinuum\PointInTime;
use Innmind\BlackBox\Set;

return static function() {
    yield proof(
        'All models are always withing bounds',
        given(Set\Either::any(
            PointInTime::any(),
            Set\Call::of(static fn() => Clock::live()->now()),
        )),
        static function($assert, $point) {
            $assert
                ->number($point->day()->ofYear())
                ->int()
                ->greaterThanOrEqual(0)
                ->lessThanOrEqual(365);
            $assert
                ->number($point->day()->ofMonth())
                ->int()
                ->greaterThanOrEqual(1)
                ->lessThanOrEqual(31);
            $assert
                ->number($point->hour()->toInt())
                ->int()
                ->greaterThanOrEqual(0)
                ->lessThanOrEqual(23);
            $assert
                ->number($point->millisecond()->toInt())
                ->int()
                ->greaterThanOrEqual(0)
                ->lessThanOrEqual(999);
            $assert
                ->number($point->minute()->toInt())
                ->int()
                ->greaterThanOrEqual(0)
                ->lessThanOrEqual(59);
            $assert
                ->number($point->second()->toInt())
                ->int()
                ->greaterThanOrEqual(0)
                ->lessThanOrEqual(59);
            $assert
                ->number($point->month()->numberOfDays())
                ->int()
                ->greaterThanOrEqual(28)
                ->lessThanOrEqual(31);
            $assert
                ->number($point->year()->numberOfDays())
                ->int()
                ->greaterThanOrEqual(365)
                ->lessThanOrEqual(366);
        },
    );
};
