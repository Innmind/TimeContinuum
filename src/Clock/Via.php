<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\{
    PointInTime,
    Format,
    Timezones,
    Timezone,
    Offset,
};
use Innmind\Immutable\Maybe;

/**
 * @internal
 */
final class Via implements Implementation
{
    /**
     * @param \Closure(): PointInTime $now
     * @param \Closure(Timezones): Timezone $changeTimezone
     */
    public function __construct(
        private \Closure $now,
        private \Closure $changeTimezone,
    ) {
    }

    /**
     * @param callable(Timezones): Timezone $changeTimezone
     */
    #[\Override]
    public function switch(callable $changeTimezone): self
    {
        return new self(
            $this->now,
            \Closure::fromCallable($changeTimezone),
        );
    }

    #[\Override]
    public function now(): PointInTime
    {
        $now = ($this->now)();

        /** @var callable(non-empty-string): Timezone */
        $of = static function(string $zone) use ($now): Timezone {
            /** @var non-empty-string $zone */
            $now = (new \DateTimeImmutable($now->format(Format::iso8601())))->setTimezone(new \DateTimeZone($zone));

            return Timezone::of(
                Offset::from($now->format('P')),
                (bool) (int) $now->format('I'),
            );
        };

        $offset = ($this->changeTimezone)(Timezones::new($of))->offset();

        return $now->changeOffset($offset);
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
        return new Live(Offset::utc())
            ->at($date, $format)
            ->map(fn($point) => $point->changeOffset($this->now()->offset()));
    }
}
