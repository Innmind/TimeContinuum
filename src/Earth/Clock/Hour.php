<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Clock;

use Innmind\TimeContinuum\{
    Clock\Hour as HourInterface,
    Exception\DomainException,
};

final class Hour implements HourInterface
{
    private $hour;

    public function __construct(int $hour)
    {
        if ($hour < 0 || $hour > 23) {
            throw new DomainException((string) $hour);
        }

        $this->hour = $hour;
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
