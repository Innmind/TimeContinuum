<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Period;

use Innmind\TimeContinuum\Period;

final class Composite implements Period
{
    private $year;
    private $month;
    private $day;
    private $hour;
    private $minute;
    private $second;
    private $millisecond;

    public function __construct(
        int $year,
        int $month,
        int $day,
        int $hour,
        int $minute,
        int $second,
        int $millisecond
    ) {
        $millisecond = new Millisecond($millisecond);
        $second = new Second($second + $millisecond->seconds());
        $minute = new Minute($minute + $second->minutes() + $millisecond->minutes());
        $hour = new Hour(
            $hour +
            $minute->hours() +
            $second->hours() +
            $millisecond->hours()
        );
        $day = new Day(
            $day +
            $hour->days() +
            $minute->days() +
            $second->days() +
            $millisecond->days()
        );
        $month = new Month($month);
        $year = new Year($year + $month->years());

        $this->year = $year->years();
        $this->month = $month->months();
        $this->day = $day->days();
        $this->hour = $hour->hours();
        $this->minute = $minute->minutes();
        $this->second = $second->seconds();
        $this->millisecond = $millisecond->milliseconds();
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
        return $this->day;
    }

    public function hours(): int
    {
        return $this->hour;
    }

    public function minutes(): int
    {
        return $this->minute;
    }

    public function seconds(): int
    {
        return $this->second;
    }

    public function milliseconds(): int
    {
        return $this->millisecond;
    }

    public function equals(Period $period): bool
    {
        return $this->year === $period->years() &&
            $this->month === $period->months() &&
            $this->day === $period->days() &&
            $this->hour === $period->hours() &&
            $this->minute === $period->minutes() &&
            $this->second === $period->seconds() &&
            $this->millisecond === $period->milliseconds();
    }

    public function add(Period $period): Period
    {
        return new self(
            $this->year + $period->years(),
            $this->month + $period->months(),
            $this->day + $period->days(),
            $this->hour + $period->hours(),
            $this->minute + $period->minutes(),
            $this->second + $period->seconds(),
            $this->millisecond + $period->milliseconds()
        );
    }
}
