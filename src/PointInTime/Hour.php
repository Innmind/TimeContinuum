<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\PointInTime;

/**
 * @psalm-immutable
 */
final class Hour
{
    /**
     * @param int<0, 23> $hour
     */
    private function __construct(
        private int $hour,
    ) {
    }

    /**
     * @psalm-pure
     * @internal
     *
     * @param int<0, 23> $hour
     */
    #[\NoDiscard]
    public static function of(int $hour): self
    {
        return new self($hour);
    }

    /**
     * @return 60
     */
    #[\NoDiscard]
    public function numberOfMinutes(): int
    {
        return 60;
    }

    /**
     * @return int<0, 23>
     */
    #[\NoDiscard]
    public function toInt(): int
    {
        return $this->hour;
    }
}
