<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Period;

use Innmind\TimeContinuum\{
    Period,
    Exception\PeriodCantBeNegative,
};

/**
 * @psalm-immutable
 */
final class Month implements Period
{
    private int $year;
    private int $month;

    public function __construct(int $month)
    {
        if ($month < 0) {
            throw new PeriodCantBeNegative((string) $month);
        }

        $this->year = (int) ($month / 12);
        $this->month = $month % 12;
    }

    /**
     * @param 0|positive-int $month
     */
    public static function of(int $month): self
    {
        return new self($month);
    }

    public function years(): int
    {
        return $this->year;
    }

    public function months(): int
    {
        return $this->month;
    }

    public function days(): int
    {
        return 0;
    }

    public function hours(): int
    {
        return 0;
    }

    public function minutes(): int
    {
        return 0;
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
        return $period->years() === $this->year &&
            $period->months() === $this->month &&
            $period->days() === 0 &&
            $period->hours() === 0 &&
            $period->minutes() === 0 &&
            $period->seconds() === 0 &&
            $period->milliseconds() === 0;
    }

    public function add(Period $period): Period
    {
        return new Composite(
            $this->year + $period->years(),
            $this->month + $period->months(),
            $period->days(),
            $period->hours(),
            $period->minutes(),
            $period->seconds(),
            $period->milliseconds(),
        );
    }
}
