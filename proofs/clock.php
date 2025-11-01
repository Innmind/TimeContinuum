<?php
declare(strict_types = 1);

use Innmind\TimeContinuum\{
    Clock,
    Period,
    Format,
    PointInTime as Point,
};
use Fixtures\Innmind\TimeContinuum\PointInTime;
use Innmind\BlackBox\Set;

return static function() {
    yield proof(
        'All models are always within bounds',
        given(Set::either(
            PointInTime::any(),
            Set::call(static fn() => Clock::live()->now()),
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
            Set::strings()->unicode(),
            Set::of(
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
        given(
            PointInTime::any(),
            Set::of(
                Format::iso8601(),
                new class implements Format\Custom {
                    public function normalize(): Format
                    {
                        return Format::iso8601();
                    }
                },
            ),
        ),
        static function($assert, $point, $format) {
            $parsed = Clock::live()
                ->ofFormat($format)
                ->at($point->format($format))
                ->match(
                    static fn($point) => $point->format($format),
                    static fn() => null,
                );

            $assert->not()->null($parsed);
            $assert->same(
                Clock::live()
                    ->at($point->format($format), $format)
                    ->match(
                        static fn($point) => $point->format($format),
                        static fn() => null,
                    ),
                $parsed,
            );
        },
    );

    yield proof(
        'Each call to Clock::now() is ahead of the previous',
        given(
            Set::of(
                Clock::live(),
                Clock::via( // to make sure the now is not memoized
                    static fn() => Clock::live()->now(),
                ),
            ),
            Set::integers()
                ->between(1, 2_000_000) // up to 2 seconds
                ->nullable(),
        ),
        static function($assert, $clock, $microsecond) {
            $start = $clock->now();

            if (\is_int($microsecond)) {
                \usleep($microsecond);
            }

            $assert->true(
                $clock->now()->aheadOf(
                    $start,
                ),
            );
        },
    );

    yield test(
        'Clock::now() is equal to iteself',
        static function($assert) {
            $clock = Clock::live();
            $now = $clock->now();

            $assert->true($now->equals($now));
        },
    );

    yield test(
        'Clock::via()->switch()->now() applies the offset at the provided now date',
        static function($assert) {
            $clock = Clock::via(
                static fn() => Point::at(
                    new DateTimeImmutable('2025-11-01 12:00:00'),
                ),
            )->switch(static fn($timezones) => $timezones->europe()->paris());

            $assert->same(
                '+01:00',
                $clock->now()->offset()->toString(),
            );

            $clock = Clock::via(
                static fn() => Point::at(
                    new DateTimeImmutable('2025-10-25 12:00:00'),
                ),
            )->switch(static fn($timezones) => $timezones->europe()->paris());

            $assert->same(
                '+02:00',
                $clock->now()->offset()->toString(),
            );
        },
    );
};
