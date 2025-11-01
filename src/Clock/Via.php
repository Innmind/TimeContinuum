<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\{
    PointInTime,
    Format,
    Offset,
    Timezone,
    Timezones,
};
use Innmind\Immutable\Maybe;

/**
 * @internal
 */
final class Via implements Implementation
{
    /**
     * @param \Closure(): PointInTime $now
     */
    public function __construct(
        private \Closure $now,
        private Offset $offset,
    ) {
    }

    #[\Override]
    public function switch(callable $changeTimezone): self
    {
        $now = $this->now();
        /** @var callable(non-empty-string): Timezone */
        $of = static function(string $zone) use ($now): Timezone {
            /** @var non-empty-string $zone */
            $now = (new \DateTimeImmutable($now->format(Format::iso8601())))->setTimezone(new \DateTimeZone($zone));

            return Timezone::of(
                Offset::from($now->format('P')),
                (bool) (int) $now->format('I'),
            );
        };

        $offset = $changeTimezone(Timezones::new($of))->offset();

        return new self(
            $this->now,
            $offset,
        );
    }

    #[\Override]
    public function now(): PointInTime
    {
        return ($this->now)()->changeOffset($this->offset);
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
