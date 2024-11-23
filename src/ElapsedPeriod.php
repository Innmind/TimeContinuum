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
     * @psalm-pure
     *
     * @throws \LogicException When using a period containing months or years
     */
    public static function ofPeriod(Period $period): self
    {
        if ($period->months() !== 0 || $period->years() !== 0) {
            // a month or a year is not constant
            throw new \LogicException('Months and years can not be converted to microseconds');
        }

        $milliseconds = Period\Value::day->milliseconds($period->days()) +
            Period\Value::hour->milliseconds($period->hours()) +
            Period\Value::minute->milliseconds($period->minutes()) +
            Period\Value::second->milliseconds($period->seconds()) +
            $period->milliseconds();
        $milliseconds *= 1_000;

        return new self($milliseconds + $period->microseconds());
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
