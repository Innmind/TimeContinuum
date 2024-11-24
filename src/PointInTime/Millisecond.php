<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\PointInTime;

/**
 * @psalm-immutable
 */
final class Millisecond
{
    /**
     * @param int<0, 999> $millisecond
     */
    private function __construct(
        private int $millisecond,
    ) {
    }

    /**
     * @psalm-pure
     * @internal
     *
     * @param int<0, 999> $millisecond
     */
    public static function of(int $millisecond): self
    {
        return new self($millisecond);
    }

    /**
     * @return int<0, 999>
     */
    public function toInt(): int
    {
        return $this->millisecond;
    }
}
