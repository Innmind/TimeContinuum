<?php
declare(strict_types = 1);

use Innmind\TimeContinuum\{
    Clock,
    Period,
    Format,
};
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
                ->number($point->microsecond()->toInt())
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

    yield proof(
        'Point in times precision is down to the microsecond',
        given(PointInTime::any()),
        static function($assert, $point) {
            $assert->false(
                $point->equals(
                    $point->goBack(Period::microsecond(1)),
                ),
            );
            $assert->false(
                $point->equals(
                    $point->goForward(Period::microsecond(1)),
                ),
            );

            $assert->true(
                $point->goForward(Period::microsecond(1))->aheadOf(
                    $point,
                ),
            );
            $assert->true(
                $point->aheadOf(
                    $point->goBack(Period::microsecond(1)),
                ),
            );
        },
    );

    yield proof(
        'Clock::at() returns nothing for invalid strings',
        given(
            Set\Unicode::strings(),
            Set\Elements::of(
                Format::cookie(),
                Format::iso8601(),
                Format::rfc1036(),
                Format::rfc1123(),
                Format::rfc2822(),
                Format::rfc822(),
                Format::rfc850(),
                Format::rss(),
                Format::w3c(),
            ),
        ),
        static fn($assert, $string, $format) => $assert->null(
            Clock::live()->at($string, $format)->match(
                static fn($point) => $point,
                static fn() => null,
            ),
        ),
    );

    yield proof(
        'Clock::ofFormat()->at()',
        given(PointInTime::any()),
        static function($assert, $point) {
            $parsed = Clock::live()
                ->ofFormat(Format::iso8601())
                ->at($point->format(Format::iso8601()))
                ->match(
                    static fn($point) => $point->format(Format::iso8601()),
                    static fn() => null,
                );

            $assert->not()->null($parsed);
            $assert->same(
                Clock::live()
                    ->at($point->format(Format::iso8601()), Format::iso8601())
                    ->match(
                        static fn($point) => $point->format(Format::iso8601()),
                        static fn() => null,
                    ),
                $parsed,
            );
        },
    );
};
