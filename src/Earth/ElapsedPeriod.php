<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth;

use Innmind\TimeContinuum\{
    ElapsedPeriod as ElapsedPeriodInterface,
    Period as PeriodInterface,
    Exception\ElapsedPeriodCantBeNegative,
    Exception\LogicException,
};
use Innmind\Immutable\Maybe;

/**
 * @psalm-immutable
 */
final class ElapsedPeriod implements ElapsedPeriodInterface
{
    private int $milliseconds;

    public function __construct(int $milliseconds)
    {
        if ($milliseconds < 0) {
            throw new ElapsedPeriodCantBeNegative((string) $milliseconds);
        }

        $this->milliseconds = $milliseconds;
    }

    /**
     * @psalm-pure
     *
     * @throws ElapsedPeriodCantBeNegative
     */
    public static function of(int $milliseconds): self
    {
        return new self($milliseconds);
    }

    /**
     * @psalm-pure
     *
     * @return Maybe<self>
     */
    public static function maybe(int $milliseconds): Maybe
    {
        try {
            return Maybe::just(new self($milliseconds));
        } catch (ElapsedPeriodCantBeNegative $e) {
            /** @var Maybe<self> */
            return Maybe::nothing();
        }
    }

    /**
     * @psalm-pure
     *
     * @throws LogicException When using a period containing months or years
     */
    public static function ofPeriod(PeriodInterface $period): self
    {
        if ($period->months() !== 0 || $period->years() !== 0) {
            // a month or a year is not constant
            throw new LogicException('Months and years can not be converted to milliseconds');
        }

        $milliseconds = Period::day->milliseconds($period->days()) +
            Period::hour->milliseconds($period->hours()) +
            Period::minute->milliseconds($period->minutes()) +
            Period::second->milliseconds($period->seconds()) +
            $period->milliseconds();

        return new self($milliseconds);
    }

    public function milliseconds(): int
    {
        return $this->milliseconds;
    }

    public function longerThan(ElapsedPeriodInterface $period): bool
    {
        return $this->milliseconds > $period->milliseconds();
    }

    public function equals(ElapsedPeriodInterface $period): bool
    {
        return $this->milliseconds === $period->milliseconds();
    }
}
