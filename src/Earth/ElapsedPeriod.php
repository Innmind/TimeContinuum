<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth;

use Innmind\TimeContinuum\{
    ElapsedPeriod as ElapsedPeriodInterface,
    Exception\ElapsedPeriodCantBeNegativeException
};

final class ElapsedPeriod implements ElapsedPeriodInterface
{
    private $milliseconds;

    public function __construct(int $milliseconds)
    {
        if ($milliseconds < 0) {
            throw new ElapsedPeriodCantBeNegativeException;
        }

        $this->milliseconds = $milliseconds;
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
