<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Period;

use Innmind\TimeContinuum\{
    Period,
    Exception\PeriodCantBeNegative,
};

final class Second implements Period
{
    private $minute;
    private $second;

    public function __construct(int $second)
    {
        if ($second < 0) {
            throw new PeriodCantBeNegative((string) $second);
        }

        $this->minute = new Minute((int) ($second / 60));
        $this->second = $second % 60;
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
        return $this->minute->days();
    }

    public function hours(): int
    {
        return $this->minute->hours();
    }

    public function minutes(): int
    {
        return $this->minute->minutes();
    }

    public function seconds(): int
    {
        return $this->second;
    }

    public function milliseconds(): int
    {
        return 0;
    }

    public function equals(Period $period): bool
    {
        return $period->years() === 0 &&
            $period->months() === 0 &&
            $period->days() === $this->days() &&
            $period->hours() === $this->hours() &&
            $period->minutes() === $this->minutes() &&
            $period->seconds() === $this->second &&
            $period->milliseconds() === 0;
    }

    public function add(Period $period): Period
    {
        return new Composite(
            $period->years(),
            $period->months(),
            $this->days() + $period->days(),
            $this->hours() + $period->hours(),
            $this->minutes() + $period->minutes(),
            $this->second + $period->seconds(),
            $period->milliseconds()
        );
    }
}
