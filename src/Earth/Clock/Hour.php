<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Clock;

use Innmind\TimeContinuum\{
    Clock\Hour as HourInterface,
    Exception\DomainException,
};

/**
 * @psalm-immutable
 */
final class Hour implements HourInterface
{
    private int $hour;

    public function __construct(int $hour)
    {
        if ($hour < 0 || $hour > 23) {
            throw new DomainException((string) $hour);
        }

        $this->hour = $hour;
    }

    public function numberOfMinutes(): int
    {
        return 60;
    }

    public function toInt(): int
    {
        return $this->hour;
    }

    public function toString(): string
    {
        return (string) $this->hour;
    }
}
