<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

use Innmind\TimeContinuum\TimeContinuum\{
    YearInterface,
    MonthInterface,
    DayInterface,
    HourInterface,
    MinuteInterface,
    SecondInterface,
    MillisecondInterface,
};

interface PointInTimeInterface
{
    /**
     * Since 1970-01-01T00:00:00+00:00
     */
    public function milliseconds(): int;
    public function year(): YearInterface;
    public function month(): MonthInterface;
    public function day(): DayInterface;
    public function hour(): HourInterface;
    public function minute(): MinuteInterface;
    public function second(): SecondInterface;
    public function millisecond(): MillisecondInterface;
    public function format(FormatInterface $format): string;
    public function changeTimezone(TimezoneInterface $zone): self;
    public function timezone(): TimezoneInterface;
    public function elapsedSince(self $point): ElapsedPeriodInterface;
    public function goBack(PeriodInterface $period): self;
    public function goForward(PeriodInterface $period): self;
    public function equals(self $point): bool;
    public function aheadOf(self $point): bool;
    public function __toString(): string;
}
