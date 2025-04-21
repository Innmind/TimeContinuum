<?php
declare(strict_types = 1);

use Innmind\TimeContinuum\{
    PointInTime\HighResolution,
    Period,
    ElapsedPeriod,
};
use Fixtures\Innmind\TimeContinuum as Fixtures;
use Innmind\BlackBox\Set;

return static function() {
    yield proof(
        'High resolution elapsed period',
        given(
            Set\Integers::above(0),
            Set\Integers::above(0),
            Set\Integers::between(0, 999_999_999),
            Set\Integers::between(0, 999_999_999),
        )->filter(static fn($start, $end) => $end > $start),
        static function(
            $assert,
            $startSeconds,
            $endSeconds,
            $startNanoseconds,
            $endNanoseconds,
        ) {
            $start = HighResolution::of($startSeconds, $startNanoseconds);
            $end = HighResolution::of($endSeconds, $endNanoseconds);

            $assert->true(
                $start
                    ->elapsedSince($start)
                    ->equals(
                        Period::microsecond(0)->asElapsedPeriod(),
                    ),
            );
            $assert->true(
                $end
                    ->elapsedSince($start)
                    ->longerThan(
                        Period::microsecond(1)->asElapsedPeriod(),
                    ),
            );
        },
    );

    yield proof(
        'High resolution elapsed period within same second',
        given(
            Set\Integers::between(0, 999_999_999),
            Set\Integers::between(0, 999_999_999),
        )->filter(static fn($start, $end) => $end > $start && ($end - $start) > 1_000),
        static function(
            $assert,
            $startNanoseconds,
            $endNanoseconds,
        ) {
            $start = HighResolution::of(0, $startNanoseconds);
            $end = HighResolution::of(0, $endNanoseconds);

            $assert->true(
                $start
                    ->elapsedSince($start)
                    ->equals(
                        Period::microsecond(0)->asElapsedPeriod(),
                    ),
            );
            $assert->true(
                $end
                    ->elapsedSince($start)
                    ->longerThan(
                        Period::microsecond(1)->asElapsedPeriod(),
                    ),
            );
        },
    );

    yield proof(
        'Elapsed period',
        given(
            Fixtures\PointInTime::any(),
            Set\Integers::above(1),
        ),
        static function($assert, $start, $microsecond) {
            $assert->true(
                $start
                    ->elapsedSince($start)
                    ->equals(
                        Period::microsecond(0)->asElapsedPeriod(),
                    ),
            );
            $assert->true(
                $start
                    ->goForward(Period::microsecond($microsecond))
                    ->elapsedSince($start)
                    ->equals(
                        Period::microsecond($microsecond)->asElapsedPeriod(),
                    ),
            );
            $assert->true(
                $start
                    ->goForward(Period::microsecond($microsecond))
                    ->elapsedSince($start)
                    ->longerThan(
                        Period::microsecond(0)->asElapsedPeriod(),
                    ),
            );
        },
    );

    yield proof(
        'Negative elapsed periods throws',
        given(
            Fixtures\PointInTime::any(),
            Set\Integers::above(1),
        ),
        static function($assert, $start, $microsecond) {
            $assert->throws(
                static fn() => $start
                    ->goBack(Period::microsecond($microsecond))
                    ->elapsedSince($start),
            );
        },
    );

    yield proof(
        'Negative high resolution elapsed periods throws',
        given(
            Set\Integers::above(0),
            Set\Integers::above(0),
            Set\Integers::between(0, 999_999_999),
            Set\Integers::between(0, 999_999_999),
        )->filter(static fn($start, $end) => $end > $start),
        static function(
            $assert,
            $startSeconds,
            $endSeconds,
            $startNanoseconds,
            $endNanoseconds,
        ) {
            $start = HighResolution::of($startSeconds, $startNanoseconds);
            $end = HighResolution::of($endSeconds, $endNanoseconds);

            $assert->throws(
                static fn() => $start->elapsedSince($end),
            );
        },
    );

    yield test(
        'Regression elapsed period',
        static function($assert) {
            $before = ElapsedPeriod::of(1, 987, 564);
            $threshold = ElapsedPeriod::of(2, 0, 0);
            $after = ElapsedPeriod::of(2, 40, 375);

            $assert->false($before->longerThan($threshold));
            $assert->true($after->longerThan($threshold));

            $before = ElapsedPeriod::of(1, 0, 0);
            $threshold = ElapsedPeriod::of(2, 0, 0);
            $after = ElapsedPeriod::of(2, 0, 1);

            $assert->false($before->longerThan($threshold));
            $assert->true($after->longerThan($threshold));

            $threshold = ElapsedPeriod::of(2, 2, 0);
            $after = ElapsedPeriod::of(2, 1, 1);

            $assert->false($after->longerThan($threshold));
        },
    );
};
