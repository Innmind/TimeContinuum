<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

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
    public static function of(int $hour): self
    {
        return new self($hour);
    }

    /**
     * @return 60
     */
    public function numberOfMinutes(): int
    {
        return 60;
    }

    /**
     * @return int<0, 23>
     */
    public function toInt(): int
    {
        return $this->hour;
    }

    /**
     * @return non-empty-string
     */
    public function toString(): string
    {
        return (string) $this->hour;
    }
}
