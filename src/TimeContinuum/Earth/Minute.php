<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\TimeContinuum\Earth;

use Innmind\TimeContinuum\{
    TimeContinuum\MinuteInterface,
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

    public function __toString(): string
    {
        return (string) $this->minute;
    }
}
