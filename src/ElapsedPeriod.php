<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

/**
 * @psalm-immutable
 */
final class ElapsedPeriod
{
    /** @var int<0, max> */
    private int $microseconds;

    private function __construct(int $microseconds)
    {
        if ($microseconds < 0) {
            throw new \RuntimeException((string) $microseconds);
        }

        $this->microseconds = $microseconds;
    }

    /**
     * @psalm-pure
     * @internal
     *
     * @throws \RuntimeException
     */
    public static function of(int $microseconds): self
    {
        return new self($microseconds);
    }

    /**
     * @return int<0, max>
     */
    public function milliseconds(): int
    {
        /** @var int<0, max> */
        return (int) ($this->microseconds / 1_000);
    }

    /**
     * @return int<0, max>
     */
    public function microseconds(): int
    {
        return $this->microseconds;
    }

    public function longerThan(self $period): bool
    {
        return $this->microseconds > $period->microseconds;
    }

    public function equals(self $period): bool
    {
        return $this->microseconds === $period->microseconds;
    }
}
