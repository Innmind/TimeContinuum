<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\TimeContinuum\Earth;

use Innmind\TimeContinuum\{
    TimeContinuum\SecondInterface,
    Exception\InvalidArgumentException,
};

final class Second implements SecondInterface
{
    private $second;

    public function __construct(int $second)
    {
        if ($second < 0 || $second > 59) {
            throw new InvalidArgumentException;
        }

        $this->second = $second;
    }

    public function toInt(): int
    {
        return $this->second;
    }

    public function __toString(): string
    {
        return (string) $this->second;
    }
}
