<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Period;

use Innmind\TimeContinuum\{
    PeriodInterface,
    Exception\PeriodCantBeNegativeException,
};

final class Millisecond implements PeriodInterface
{
    private $second;
    private $millisecond;

    public function __construct(int $millisecond)
    {
        if ($millisecond < 0) {
            throw new PeriodCantBeNegativeException;
        }

        $this->second = new Second((int) ($millisecond / 1000));
        $this->millisecond = $millisecond % 1000;
    }

    public function years(): int
    {
        return 0;
    }

    public function months(): int
    {
        return 0;
    }

    public function days(): int
    {
        return $this->second->days();
    }

    public function hours(): int
    {
        return $this->second->hours();
    }

    public function minutes(): int
    {
        return $this->second->minutes();
    }

    public function seconds(): int
    {
        return $this->second->seconds();
    }

    public function milliseconds(): int
    {
        return $this->millisecond;
    }

    public function equals(PeriodInterface $period): bool
    {
        return $period->years() === 0 &&
            $period->months() === 0 &&
            $period->days() === $this->days() &&
            $period->hours() === $this->hours() &&
            $period->minutes() === $this->minutes() &&
            $period->seconds() === $this->seconds() &&
            $period->milliseconds() === $this->millisecond;
    }

    public function add(PeriodInterface $period): PeriodInterface
    {
        return new Composite(
            $period->years(),
            $period->months(),
            $this->days() + $period->days(),
            $this->hours() + $period->hours(),
            $this->minutes() + $period->minutes(),
            $this->seconds() + $period->seconds(),
            $this->millisecond + $period->milliseconds()
        );
    }
}
