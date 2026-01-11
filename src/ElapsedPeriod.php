<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

/**
 * @psalm-immutable
 */
final class ElapsedPeriod
{
    /**
     * @param int<0, max> $seconds
     * @param int<0, 999> $milliseconds
     * @param int<0, 999> $microseconds
     */
    private function __construct(
        private int $seconds,
        private int $milliseconds,
        private int $microseconds,
    ) {
    }

    /**
     * @psalm-pure
     * @internal
     *
     * @param int<0, max> $seconds
     * @param int<0, 999> $milliseconds
     * @param int<0, 999> $microseconds
     */
    #[\NoDiscard]
    public static function of(
        int $seconds,
        int $milliseconds,
        int $microseconds,
    ): self {
        return new self($seconds, $milliseconds, $microseconds);
    }

    #[\NoDiscard]
    public function longerThan(self $period): bool
    {
        if ($this->seconds > $period->seconds) {
            return true;
        }

        if ($period->seconds > $this->seconds) {
            return false;
        }

        if ($this->milliseconds > $period->milliseconds) {
            return true;
        }

        if ($period->milliseconds > $this->milliseconds) {
            return false;
        }

        return $this->microseconds > $period->microseconds;
    }

    #[\NoDiscard]
    public function equals(self $period): bool
    {
        return $this->seconds === $period->seconds &&
            $this->milliseconds === $period->milliseconds &&
            $this->microseconds === $period->microseconds;
    }

    #[\NoDiscard]
    public function asPeriod(): Period
    {
        return Period::second($this->seconds)
            ->add(Period::millisecond($this->milliseconds))
            ->add(Period::microsecond($this->microseconds));
    }
}
