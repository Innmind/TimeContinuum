<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\TimeContinuum\Earth;

use Innmind\TimeContinuum\{
    TimeContinuum\HourInterface,
    Exception\InvalidArgumentException
};

final class Hour implements HourInterface
{
    private $hour;

    public function __construct(int $hour)
    {
        if ($hour < 0 || $hour > 23) {
            throw new InvalidArgumentException;
        }

        $this->hour = $hour;
    }

    public function toInt(): int
    {
        return $this->hour;
    }

    public function __toString(): string
    {
        return (string) $this->hour;
    }
}
