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

    public function __construct(PointInTime $now)
    {
        $this->now = $now;
    }

    public function now(): PointInTime
    {
        return $this->now;
    }

    public function at(string $date, Format $format = null): PointInTime
    {
        return (new Clock)->at($date, $format)->changeTimezone($this->now->timezone());
    }
}
