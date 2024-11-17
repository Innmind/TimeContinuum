<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

/**
 * @psalm-immutable
 */
final class Minute
{
    /**
     * @param int<0, 59> $minute
     */
    private function __construct(
        private int $minute,
    ) {
    }

    /**
     * @psalm-pure
     * @internal
     *
     * @param int<0, 59> $minute
     */
    public static function of(int $minute): self
    {
        return new self($minute);
    }

    /**
     * @return 60
     */
    public function numberOfSeconds(): int
    {
        return 60;
    }

    /**
     * @return int<0, 59>
     */
    public function toInt(): int
    {
        return $this->minute;
    }

    /**
     * @return non-empty-string
     */
    public function toString(): string
    {
        return (string) $this->minute;
    }
}
