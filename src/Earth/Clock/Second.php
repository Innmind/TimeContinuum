<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Clock;

use Innmind\TimeContinuum\{
    Clock\Second as SecondInterface,
    Exception\DomainException,
};

final class Second implements SecondInterface
{
    private int $second;

    public function __construct(int $second)
    {
        if ($second < 0 || $second > 59) {
            throw new DomainException((string) $second);
        }

        $this->second = $second;
    }

    public function toInt(): int
    {
        return $this->second;
    }

    public function toString(): string
    {
        return (string) $this->second;
    }
}
