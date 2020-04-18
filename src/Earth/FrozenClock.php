<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth;

use Innmind\TimeContinuum\{
    Clock as ClockInterface,
    PointInTime,
    Format,
};

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
    public function at(string $date, Format $format = null): PointInTime
    {
        return $this->concrete->at($date, $format)->changeTimezone($this->now->timezone());
    }
}
