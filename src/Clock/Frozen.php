<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\{
    Clock,
    PointInTime,
    Format,
};
use Innmind\Immutable\Maybe;

final class Frozen implements Clock
{
    private PointInTime $now;
    private Clock $concrete;

    public function __construct(PointInTime $now)
    {
        $this->now = $now;
        $this->concrete = new Live;
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
