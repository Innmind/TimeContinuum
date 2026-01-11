<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\PointInTime;

/**
 * @psalm-immutable
 */
final class Microsecond
{
    /**
     * @param int<0, 999> $microsecond
     */
    private function __construct(
        private int $microsecond,
    ) {
    }

    /**
     * @psalm-pure
     * @internal
     *
     * @param int<0, 999> $microsecond
     */
    #[\NoDiscard]
    public static function of(int $microsecond): self
    {
        return new self($microsecond);
    }

    /**
     * @return int<0, 999>
     */
    #[\NoDiscard]
    public function toInt(): int
    {
        return $this->microsecond;
    }
}
