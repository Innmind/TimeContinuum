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
final class Live implements Implementation
{
    public function __construct(private Offset $offset)
    {
    }

    /**
     * @param callable(Timezones): Timezone $changeTimezone
     */
    #[\Override]
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

    #[\Override]
    public function now(): PointInTime
    {
        return PointInTime::now()->changeOffset($this->offset);
    }

    /**
     * @psalm-mutation-free
     *
     * @param non-empty-string $date
     *
     * @return Maybe<PointInTime>
     */
    #[\Override]
    public function at(string $date, Format $format): Maybe
    {
        try {
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

        return Maybe::just(PointInTime::at($datetime)->changeOffset($this->offset));
    }
}
