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
     * @param int<0, 999> $microsecond
     */
    private function __construct(
        private int $year,
        private int $month,
        private int $day,
        private int $hour,
        private int $minute,
        private int $second,
        private int $millisecond,
        private int $microsecond,
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
     * @param int<0, 999> $microsecond
     */
    public static function of(
        int $year,
        int $month,
        int $day,
        int $hour,
        int $minute,
        int $second,
        int $millisecond,
        int $microsecond,
    ): self {
        return new self(
            $year,
            $month,
            $day,
            $hour,
            $minute,
            $second,
            $millisecond,
            $microsecond,
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
     * @param int<0, max> $microsecond
     */
    public static function composite(
        int $year,
        int $month,
        int $day,
        int $hour,
        int $minute,
        int $second,
        int $millisecond,
        int $microsecond,
    ): self {
        return self::microsecond($microsecond)
            ->add(self::millisecond($millisecond))
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
        if ($month < 12) {
            return new self(0, $month, 0, 0, 0, 0, 0, 0);
        }

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
        if ($hour < 24) {
            return new self(0, 0, 0, $hour, 0, 0, 0, 0);
        }

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
        if ($minute < 60) {
            return new self(0, 0, 0, 0, $minute, 0, 0, 0);
        }

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
        if ($second < 60) {
            return new self(0, 0, 0, 0, 0, $second, 0, 0);
        }

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
        if ($millisecond < 1_000) {
            return new self(0, 0, 0, 0, 0, 0, $millisecond, 0);
        }

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
            0,
        );
    }

    /**
     * @psalm-pure
     *
     * @param 0|positive-int $microsecond
     */
    public static function microsecond(int $microsecond): self
    {
        if ($microsecond < 1_000) {
            return new self(0, 0, 0, 0, 0, 0, 0, $microsecond);
        }

        /** @var int<0, max> */
        $millisecond = (int) ($microsecond / 1000);
        $millisecond = self::millisecond($millisecond);
        $microsecond = $microsecond % 1000;

        return new self(
            $millisecond->years(),
            $millisecond->months(),
            $millisecond->days(),
            $millisecond->hours(),
            $millisecond->minutes(),
            $millisecond->seconds(),
            $millisecond->milliseconds(),
            $microsecond,
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

    /**
     * @return int<0, 999>
     */
    public function microseconds(): int
    {
        return $this->microsecond;
    }

    public function equals(self $period): bool
    {
        return $this->year === $period->years() &&
            $this->month === $period->months() &&
            $this->day === $period->days() &&
            $this->hour === $period->hours() &&
            $this->minute === $period->minutes() &&
            $this->second === $period->seconds() &&
            $this->millisecond === $period->milliseconds() &&
            $this->microsecond === $period->microseconds();
    }

    public function add(self $period): self
    {
        $microsecond = self::microsecond($this->microsecond + $period->microseconds());
        $millisecond = self::millisecond(
            $this->millisecond +
            $period->milliseconds() +
            $microsecond->milliseconds(),
        );
        $second = self::second(
            $this->second +
            $period->seconds() +
            $millisecond->seconds() +
            $microsecond->seconds(),
        );
        $minute = self::minute(
            $this->minute +
            $period->minutes() +
            $second->minutes() +
            $millisecond->minutes() +
            $microsecond->minutes(),
        );
        $hour = self::hour(
            $this->hour +
            $period->hours() +
            $minute->hours() +
            $second->hours() +
            $millisecond->hours() +
            $microsecond->hours(),
        );
        $day = self::day(
            $this->day +
            $period->days() +
            $hour->days() +
            $minute->days() +
            $second->days() +
            $millisecond->days() +
            $microsecond->days(),
        );
        $month = self::month(
            $this->month +
            $period->months() +
            $day->months() +
            $hour->months() +
            $minute->months() +
            $second->months() +
            $millisecond->months() +
            $microsecond->months(),
        );
        $year = self::year(
            $this->year +
            $period->years() +
            $month->years() +
            $day->years() +
            $hour->years() +
            $minute->years() +
            $second->years() +
            $millisecond->years() +
            $microsecond->years(),
        );

        return new self(
            $year->years(),
            $month->months(),
            $day->days(),
            $hour->hours(),
            $minute->minutes(),
            $second->seconds(),
            $millisecond->milliseconds(),
            $microsecond->microseconds(),
        );
    }

    /**
     * @throws \LogicException When using a period containing months or years
     */
    public function asElapsedPeriod(): ElapsedPeriod
    {
        if ($this->months() !== 0 || $this->years() !== 0) {
            // a month or a year is not constant
            throw new \LogicException('Months and years can not be converted to microseconds');
        }

        $seconds = Period\Value::day->seconds($this->days()) +
            Period\Value::hour->seconds($this->hours()) +
            Period\Value::minute->seconds($this->minutes()) +
            $this->second;

        return ElapsedPeriod::of(
            $seconds,
            $this->millisecond,
            $this->microsecond,
        );
    }
}
