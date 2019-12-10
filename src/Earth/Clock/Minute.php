<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Clock;

use Innmind\TimeContinuum\{
    Clock\Minute as MinuteInterface,
    Exception\InvalidArgumentException,
};

final class Minute implements MinuteInterface
{
    private $minute;

    public function __construct(int $minute)
    {
        if ($minute < 0 || $minute > 59) {
            throw new InvalidArgumentException;
        }

        $this->minute = $minute;
    }

    public function toInt(): int
    {
        return $this->minute;
    }

    public function toString(): string
    {
        return (string) $this->minute;
    }
}
