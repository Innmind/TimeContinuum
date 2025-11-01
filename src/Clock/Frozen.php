<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\{
    PointInTime,
    Format,
    Timezones,
    Timezone,
};
use Innmind\Immutable\Maybe;

/**
 * @internal
 */
final class Frozen implements Implementation
{
    public function __construct(
        private PointInTime $now,
        private Live $concrete,
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
            $this->concrete->switch($changeTimezone),
        );
    }

    #[\Override]
    public function now(): PointInTime
    {
        return $this->now;
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
        return $this
            ->concrete
            ->at($date, $format)
            ->map(fn($point) => $point->changeOffset($this->now->offset()));
    }
}
