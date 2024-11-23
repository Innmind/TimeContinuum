<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

use Innmind\TimeContinuum\Period\{
    Year,
    Month,
    Day,
    Hour,
    Minute,
    Second,
    Millisecond,
};

/**
 * @psalm-immutable
 */
final class Period
{
    /**
     * @param int<0, max> $year
     * @param int<0, 11> $month
     * @param int<0, max> $day
     * @param int<0, 23> $hour
     * @param int<0, 59> $minute
     * @param int<0, 59> $second
     * @param int<0, 999> $millisecond
     */
    private function __construct(
        private int $year,
        private int $month,
        private int $day,
        private int $hour,
        private int $minute,
        private int $second,
        private int $millisecond,
    ) {
    }

    /**
     * @psalm-pure
     *
     * @param int<0, max> $year
     * @param int<0, 11> $month
     * @param int<0, max> $day
     * @param int<0, 23> $hour
     * @param int<0, 59> $minute
     * @param int<0, 59> $second
     * @param int<0, 999> $millisecond
     */
    public static function of(
        int $year,
        int $month,
        int $day,
        int $hour,
        int $minute,
        int $second,
        int $millisecond,
    ): self {
        return new self(
            $year,
            $month,
            $day,
            $hour,
            $minute,
            $second,
            $millisecond,
        );
    }

    /**
     * @psalm-pure
     *
     * @param int<0, max> $year
     * @param int<0, max> $month
     * @param int<0, max> $day
     * @param int<0, max> $hour
     * @param int<0, max> $minute
     * @param int<0, max> $second
     * @param int<0, max> $millisecond
     */
    public static function composite(
        int $year,
        int $month,
        int $day,
        int $hour,
        int $minute,
        int $second,
        int $millisecond,
    ): self {
        return Millisecond::of($millisecond)
            ->add(Second::of($second))
            ->add(Minute::of($minute))
            ->add(Hour::of($hour))
            ->add(Day::of($day))
            ->add(Month::of($month))
            ->add(Year::of($year));
    }

    /**
     * @return int<0, max>
     */
    public function years(): int
    {
        return $this->year;
    }

    /**
     * @return int<0, 11>
     */
    public function months(): int
    {
        return $this->month;
    }

    /**
     * @return int<0, max>
     */
    public function days(): int
    {
        return $this->day;
    }

    /**
     * @return int<0, 23>
     */
    public function hours(): int
    {
        return $this->hour;
    }

    /**
     * @return int<0, 59>
     */
    public function minutes(): int
    {
        return $this->minute;
    }

    /**
     * @return int<0, 59>
     */
    public function seconds(): int
    {
        return $this->second;
    }

    /**
     * @return int<0, 999>
     */
    public function milliseconds(): int
    {
        return $this->millisecond;
    }

    public function equals(self $period): bool
    {
        return $this->year === $period->years() &&
            $this->month === $period->months() &&
            $this->day === $period->days() &&
            $this->hour === $period->hours() &&
            $this->minute === $period->minutes() &&
            $this->second === $period->seconds() &&
            $this->millisecond === $period->milliseconds();
    }

    public function add(self $period): self
    {
        $millisecond = Millisecond::of($this->millisecond + $period->milliseconds());
        $second = Second::of(
            $this->second + $period->seconds() + $millisecond->seconds(),
        );
        $minute = Minute::of(
            $this->minute +
            $period->minutes() +
            $second->minutes() +
            $millisecond->minutes(),
        );
        $hour = Hour::of(
            $this->hour +
            $period->hours() +
            $minute->hours() +
            $second->hours() +
            $millisecond->hours(),
        );
        $day = Day::of(
            $this->day +
            $period->days() +
            $hour->days() +
            $minute->days() +
            $second->days() +
            $millisecond->days(),
        );
        $month = Month::of(
            $this->month +
            $period->months() +
            $day->months() +
            $hour->months() +
            $minute->months() +
            $second->months() +
            $millisecond->months(),
        );
        $year = Year::of(
            $this->year +
            $period->years() +
            $month->years() +
            $day->years() +
            $hour->years() +
            $minute->years() +
            $second->years() +
            $millisecond->years(),
        );

        return new self(
            $year->years(),
            $month->months(),
            $day->days(),
            $hour->hours(),
            $minute->minutes(),
            $second->seconds(),
            $millisecond->milliseconds(),
        );
    }

    public function asElapsedPeriod(): ElapsedPeriod
    {
        return ElapsedPeriod::ofPeriod($this);
    }
}
