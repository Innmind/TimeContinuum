<?php
declare(strict_types = 1);

use Innmind\TimeContinuum\Period;
use Fixtures\Innmind\TimeContinuum as Fixtures;
use Innmind\BlackBox\Set;

return static function() {
    yield proof(
        'PointInTime::equals()',
        given(
            Fixtures\PointInTime::any(),
            Set::either(
                Set::integers()->above(0)->map(Period::microsecond(...)),
                Set::integers()->above(0)->map(Period::millisecond(...)),
            ),
        ),
        static function($assert, $point, $period) {
            $assert->true(
                $point
                    ->goForward($period)
                    ->goBack($period)
                    ->equals($point),
            );
            $assert->true(
                $point
                    ->goBack($period)
                    ->goForward($period)
                    ->equals($point),
            );
            $assert->false(
                $point
                    ->goBack($period)
                    ->equals($point),
            );
            $assert->false(
                $point
                    ->goForward($period)
                    ->equals($point),
            );
        },
    );

    yield proof(
        'PointInTime::aheadOf()',
        given(
            Fixtures\PointInTime::any(),
            Fixtures\Period::any()->exclude(
                static fn($period) => $period->equals(Period::microsecond(0)),
            ),
        ),
        static function($assert, $point, $period) {
            $assert->true(
                $point
                    ->goForward($period)
                    ->aheadOf($point),
            );
            $assert->false(
                $point
                    ->goBack($period)
                    ->aheadOf($point),
            );
        },
    );
};
