<?php
declare(strict_types = 1);

use Innmind\TimeContinuum\Period;
use Innmind\BlackBox\Set;

return static function() {
    $period = Set\Composite::immutable(
        Period::composite(...),
        Set\Integers::between(0, 10_000), // year
        Set\Integers::between(0, 10_000), // month
        Set\Integers::between(0, 100_000), // day
        Set\Integers::between(0, 1_000_000), // hour
        Set\Integers::between(0, 1_000_000_000), // minute
        Set\Integers::above(0), // second
        Set\Integers::above(0), // millsecond
    );

    yield proof(
        'Periods components are always within bounds',
        given(Set\Either::any(
            $period,
            Set\Composite::immutable(
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
        },
    );
};
