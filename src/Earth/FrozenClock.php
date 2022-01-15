<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth;

use Innmind\TimeContinuum\{
    Clock as ClockInterface,
    PointInTime,
    Format,
};
use Innmind\Immutable\Maybe;

final class FrozenClock implements ClockInterface
{
    private PointInTime $now;
    private Clock $concrete;

    public function __construct(PointInTime $now)
    {
        $this->now = $now;
        $this->concrete = new Clock;
    }

    public function now(): PointInTime
    {
        return $this->now;
    }

    /**
     * @psalm-pure
     */
    public function at(string $date, Format $format = null): Maybe
    {
        /**
         * @psalm-suppress ImpureVariable
         * @psalm-suppress ImpurePropertyFetch
         */
        return $this
            ->concrete
            ->at($date, $format)
            ->map(fn($point) => $point->changeTimezone($this->now->timezone()));
    }
}
