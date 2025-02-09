<?php
declare(strict_types = 1);

use Innmind\TimeContinuum\PointInTime\HighResolution;
use Innmind\BlackBox\Set;

return static function() {
    yield proof(
        'HighResolution::aheadOf() on different seconds',
        given(
            Set\Integers::above(0),
            Set\Integers::above(0),
            Set\Integers::between(0, 999_999_999),
            Set\Integers::between(0, 999_999_999),
        )->filter(static fn($start, $end) => $start < $end),
        static function($assert, $start, $end, $startNanoseconds, $endNanoseconds) {
            $start = HighResolution::of($start, $startNanoseconds);
            $end = HighResolution::of($end, $endNanoseconds);

            $assert->true($end->aheadOf($start));
            $assert->false($start->aheadOf($end));
        },
    )->tag(\Innmind\BlackBox\Tag::wip);

    yield proof(
        'HighResolution::aheadOf() in same second',
        given(
            Set\Integers::above(0),
            Set\Integers::between(0, 999_999_999),
            Set\Integers::between(0, 999_999_999),
        )->filter(static fn($_, $start, $end) => $start < $end),
        static function($assert, $second, $start, $end) {
            $start = HighResolution::of($second, $start);
            $end = HighResolution::of($second, $end);

            $assert->true($end->aheadOf($start));
            $assert->false($start->aheadOf($end));
        },
    )->tag(\Innmind\BlackBox\Tag::wip);
};
