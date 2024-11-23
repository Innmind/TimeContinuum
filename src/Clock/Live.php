<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\{
    Offset,
    PointInTime,
    Format,
    Timezones,
    Timezone,
};
use Innmind\Immutable\Maybe;

/**
 * @internal
 */
final class Live
{
    private Offset $offset;

    public function __construct(Offset $offset)
    {
        $this->offset = $offset;
    }

    /**
     * @param callable(Timezones): Timezone $changeTimezone
     */
    public function switch(callable $changeTimezone): self
    {
        /** @var callable(non-empty-string): Timezone */
        $of = static function(string $zone): Timezone {
            /** @var non-empty-string $zone */
            $now = (new \DateTimeImmutable('now'))->setTimezone(new \DateTimeZone($zone));

            return Timezone::of(
                Offset::from($now->format('P')),
                (bool) (int) $now->format('I'),
            );
        };

        return new self(
            $changeTimezone(Timezones::new($of))->offset(),
        );
    }

    public function now(): PointInTime
    {
        return PointInTime::now()->changeOffset($this->offset);
    }

    /**
     * @psalm-pure
     *
     * @param non-empty-string $date
     *
     * @return Maybe<PointInTime>
     */
    public function at(string $date, Format $format = null): Maybe
    {
        if ($format instanceof Format) {
            try {
                /** @psalm-suppress ImpureMethodCall */
                $datetime = \DateTimeImmutable::createFromFormat($format->toString(), $date);
            } catch (\Throwable) {
                /** @var Maybe<PointInTime> */
                return Maybe::nothing();
            }

            if ($datetime === false) {
                /** @var Maybe<PointInTime> */
                return Maybe::nothing();
            }

            if ($datetime->format($format->toString()) !== $date) {
                /** @var Maybe<PointInTime> */
                return Maybe::nothing();
            }

            $date = $datetime->format(\DateTime::ATOM);
        } else {
            try {
                /** @psalm-suppress ImpureMethodCall */
                $datetime = new \DateTimeImmutable($date);
            } catch (\Throwable) {
                /** @var Maybe<PointInTime> */
                return Maybe::nothing();
            }
        }

        /**
         * @psalm-suppress ImpureVariable
         * @psalm-suppress ImpurePropertyFetch
         */
        return Maybe::just(PointInTime::at($datetime)->changeOffset($this->offset));
    }
}
