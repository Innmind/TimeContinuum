<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

/**
 * @psalm-immutable
 */
final class ElapsedPeriod
{
    /** @var int<0, max> */
    private int $seconds;
    /** @var int<0, 999> */
    private int $milliseconds;
    /** @var int<0, 999> */
    private int $microseconds;

    /**
     * @param int<0, max> $seconds
     * @param int<0, 999> $milliseconds
     * @param int<0, 999> $microseconds
     */
    private function __construct(
        int $seconds,
        int $milliseconds,
        int $microseconds,
    ) {
        $this->seconds = $seconds;
        $this->milliseconds = $milliseconds;
        $this->microseconds = $microseconds;
    }

    /**
     * @psalm-pure
     * @internal
     *
     * @param int<0, max> $seconds
     * @param int<0, 999> $milliseconds
     * @param int<0, 999> $microseconds
     */
    public static function of(
        int $seconds,
        int $milliseconds,
        int $microseconds,
    ): self {
        return new self($seconds, $milliseconds, $microseconds);
    }

    public function longerThan(self $period): bool
    {
        if ($this->seconds > $period->seconds) {
            return true;
        }

        if ($this->milliseconds > $period->milliseconds) {
            return true;
        }

        return $this->microseconds > $period->microseconds;
    }

    public function equals(self $period): bool
    {
        return $this->seconds === $period->seconds &&
            $this->milliseconds === $period->milliseconds &&
            $this->microseconds === $period->microseconds;
    }

    public function asPeriod(): Period
    {
        return Period::second($this->seconds)
            ->add(Period::millisecond($this->milliseconds))
            ->add(Period::microsecond($this->microseconds));
    }
}
