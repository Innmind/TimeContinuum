<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

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
        return self::millisecond($millisecond)
            ->add(self::second($second))
            ->add(self::minute($minute))
            ->add(self::hour($hour))
            ->add(self::day($day))
            ->add(self::month($month))
            ->add(self::year($year));
    }

    /**
     * @psalm-pure
     *
     * @param 0|positive-int $year
     */
    public static function year(int $year): self
    {
        return new self(
            $year,
            0,
            0,
            0,
            0,
            0,
            0,
        );
    }

    /**
     * @psalm-pure
     *
     * @param 0|positive-int $month
     */
    public static function month(int $month): self
    {
        /** @var int<0, max> */
        $year = (int) ($month / 12);
        $month = $month % 12;

        return new self(
            $year,
            $month,
            0,
            0,
            0,
            0,
            0,
        );
    }

    /**
     * @psalm-pure
     *
     * @param 0|positive-int $day
     */
    public static function day(int $day): self
    {
        return new self(
            0,
            0,
            $day,
            0,
            0,
            0,
            0,
        );
    }

    /**
     * @psalm-pure
     *
     * @param 0|positive-int $hour
     */
    public static function hour(int $hour): self
    {
        /** @var int<0, max> */
        $day = (int) ($hour / 24);
        $hour = $hour % 24;

        return new self(
            0,
            0,
            $day,
            $hour,
            0,
            0,
            0,
        );
    }

    /**
     * @psalm-pure
     *
     * @param 0|positive-int $minute
     */
    public static function minute(int $minute): self
    {
        /** @var int<0, max> */
        $hour = (int) ($minute / 60);
        $hour = self::hour($hour);
        $minute = $minute % 60;

        return new self(
            $hour->years(),
            $hour->months(),
            $hour->days(),
            $hour->hours(),
            $minute,
            0,
            0,
        );
    }

    /**
     * @psalm-pure
     *
     * @param 0|positive-int $second
     */
    public static function second(int $second): self
    {
        /** @var int<0, max> */
        $minute = (int) ($second / 60);
        $minute = self::minute($minute);
        $second = $second % 60;

        return new self(
            $minute->years(),
            $minute->months(),
            $minute->days(),
            $minute->hours(),
            $minute->minutes(),
            $second,
            0,
        );
    }

    /**
     * @psalm-pure
     *
     * @param 0|positive-int $millisecond
     */
    public static function millisecond(int $millisecond): self
    {
        /** @var int<0, max> */
        $second = (int) ($millisecond / 1000);
        $second = self::second($second);
        $millisecond = $millisecond % 1000;

        return new self(
            $second->years(),
            $second->months(),
            $second->days(),
            $second->hours(),
            $second->minutes(),
            $second->seconds(),
            $millisecond,
        );
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
        $millisecond = self::millisecond($this->millisecond + $period->milliseconds());
        $second = self::second(
            $this->second + $period->seconds() + $millisecond->seconds(),
        );
        $minute = self::minute(
            $this->minute +
            $period->minutes() +
            $second->minutes() +
            $millisecond->minutes(),
        );
        $hour = self::hour(
            $this->hour +
            $period->hours() +
            $minute->hours() +
            $second->hours() +
            $millisecond->hours(),
        );
        $day = self::day(
            $this->day +
            $period->days() +
            $hour->days() +
            $minute->days() +
            $second->days() +
            $millisecond->days(),
        );
        $month = self::month(
            $this->month +
            $period->months() +
            $day->months() +
            $hour->months() +
            $minute->months() +
            $second->months() +
            $millisecond->months(),
        );
        $year = self::year(
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
