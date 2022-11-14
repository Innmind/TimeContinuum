<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth;

use Innmind\TimeContinuum\{
    ElapsedPeriod as ElapsedPeriodInterface,
    Exception\ElapsedPeriodCantBeNegative
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
