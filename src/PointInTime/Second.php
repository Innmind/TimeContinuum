<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\PointInTime;

/**
 * @psalm-immutable
 */
final class Second
{
    /**
     * @param int<0, 59> $second
     */
    private function __construct(
        private int $second,
    ) {
    }

    /**
     * @psalm-pure
     * @internal
     *
     * @param int<0, 59> $second
     */
    #[\NoDiscard]
    public static function of(int $second): self
    {
        return new self($second);
    }

    /**
     * @return int<0, 59>
     */
    #[\NoDiscard]
    public function toInt(): int
    {
        return $this->second;
    }
}
