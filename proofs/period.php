<?php
declare(strict_types = 1);

use Innmind\TimeContinuum\Period;
use Innmind\BlackBox\Set;

return static function() {
    $period = Set::compose(
        Period::composite(...),
        Set::integers()->between(0, 10_000), // year
        Set::integers()->between(0, 10_000), // month
        Set::integers()->between(0, 100_000), // day
        Set::integers()->between(0, 1_000_000), // hour
        Set::integers()->between(0, 1_000_000_000), // minute
        Set::integers()->above(0), // second
        Set::integers()->above(0), // millisecond
        Set::integers()->above(0), // microsecond
    );

    yield proof(
        'Periods components are always within bounds',
        given(Set::either(
            $period,
            Set::compose(
                static fn($p1, $p2) => $p1->add($p2),
                $period,
                $period,
            ),
        )),
        static function($assert, $period) {
            $assert
                ->number($period->years())
                ->int()
                ->greaterThanOrEqual(0);
            $assert
                ->number($period->months())
                ->int()
                ->greaterThanOrEqual(0)
                ->lessThanOrEqual(11);
            $assert
                ->number($period->days())
                ->int()
                ->greaterThanOrEqual(0);
            $assert
                ->number($period->hours())
                ->int()
                ->greaterThanOrEqual(0)
                ->lessThanOrEqual(23);
            $assert
                ->number($period->minutes())
                ->int()
                ->greaterThanOrEqual(0)
                ->lessThanOrEqual(59);
            $assert
                ->number($period->seconds())
                ->int()
                ->greaterThanOrEqual(0)
                ->lessThanOrEqual(59);
            $assert
                ->number($period->milliseconds())
                ->int()
                ->greaterThanOrEqual(0)
                ->lessThanOrEqual(999);
            $assert
                ->number($period->microseconds())
                ->int()
                ->greaterThanOrEqual(0)
                ->lessThanOrEqual(999);
        },
    );
};
