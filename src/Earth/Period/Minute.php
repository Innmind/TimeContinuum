<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Period;

use Innmind\TimeContinuum\{
    Period,
    Exception\PeriodCantBeNegative,
};

final class Minute implements Period
{
    private Hour $hour;
    private int $minute;

    public function __construct(int $minute)
    {
        if ($minute < 0) {
            throw new PeriodCantBeNegative((string) $minute);
        }

        $this->hour = new Hour((int) ($minute / 60));
        $this->minute = $minute % 60;
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
        return $this->hour->days();
    }

    public function hours(): int
    {
        return $this->hour->hours();
    }

    public function minutes(): int
    {
        return $this->minute;
    }

    public function seconds(): int
    {
        return 0;
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
            $period->minutes() === $this->minute &&
            $period->seconds() === 0 &&
            $period->milliseconds() === 0;
    }

    public function add(Period $period): Period
    {
        return new Composite(
            $period->years(),
            $period->months(),
            $this->days() + $period->days(),
            $this->hours() + $period->hours(),
            $this->minute + $period->minutes(),
            $period->seconds(),
            $period->milliseconds(),
        );
    }
}
