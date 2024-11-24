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
final class Frozen
{
    private PointInTime $now;
    private Live $concrete;

    public function __construct(PointInTime $now, Live $concrete)
    {
        $this->now = $now;
        $this->concrete = $concrete;
    }

    /**
     * @param callable(Timezones): Timezone $changeTimezone
     */
    public function switch(callable $changeTimezone): self
    {
        return new self(
            $this->now,
            $this->concrete->switch($changeTimezone),
        );
    }

    public function now(): PointInTime
    {
        return $this->now;
    }

    /**
     * @psalm-pure
     *
     * @param non-empty-string $date
     *
     * @return Maybe<PointInTime>
     */
    public function at(string $date, Format $format): Maybe
    {
        /**
         * @psalm-suppress ImpureVariable
         * @psalm-suppress ImpurePropertyFetch
         */
        return $this
            ->concrete
            ->at($date, $format)
            ->map(fn($point) => $point->changeOffset($this->now->offset()));
    }
}
