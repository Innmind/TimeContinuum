<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

/**
 * @psalm-immutable
 */
final class ElapsedPeriod
{
    /** @var int<0, max> */
    private int $milliseconds;

    private function __construct(int $milliseconds)
    {
        if ($milliseconds < 0) {
            throw new \RuntimeException((string) $milliseconds);
        }

        $this->milliseconds = $milliseconds;
    }

    /**
     * @psalm-pure
     *
     * @throws \RuntimeException
     */
    public static function of(int $milliseconds): self
    {
        return new self($milliseconds);
    }

    /**
     * @psalm-pure
     *
     * @param int<0, max> $milliseconds
     */
    public static function literal(int $milliseconds): self
    {
        return new self($milliseconds);
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
            throw new \LogicException('Months and years can not be converted to milliseconds');
        }

        $milliseconds = Period\Value::day->milliseconds($period->days()) +
            Period\Value::hour->milliseconds($period->hours()) +
            Period\Value::minute->milliseconds($period->minutes()) +
            Period\Value::second->milliseconds($period->seconds()) +
            $period->milliseconds();

        return new self($milliseconds);
    }

    public function milliseconds(): int
    {
        return $this->milliseconds;
    }

    public function longerThan(self $period): bool
    {
        return $this->milliseconds > $period->milliseconds();
    }

    public function equals(self $period): bool
    {
        return $this->milliseconds === $period->milliseconds();
    }
}
