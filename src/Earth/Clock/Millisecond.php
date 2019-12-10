<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Clock;

use Innmind\TimeContinuum\{
    Clock\Millisecond as MillisecondInterface,
    Exception\DomainException,
};

final class Millisecond implements MillisecondInterface
{
    private int $millisecond;

    public function __construct(int $millisecond)
    {
        if ($millisecond < 0 || $millisecond > 999) {
            throw new DomainException((string) $millisecond);
        }

        $this->millisecond = $millisecond;
    }

    public function toInt(): int
    {
        return $this->millisecond;
    }

    public function toString(): string
    {
        return (string) $this->millisecond;
    }
}
