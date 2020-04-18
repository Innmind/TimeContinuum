<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

use Innmind\TimeContinuum\Clock\{
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
interface PointInTime
{
    /**
     * Since 1970-01-01T00:00:00+00:00
     */
    public function milliseconds(): int;
    public function year(): Year;
    public function month(): Month;
    public function day(): Day;
    public function hour(): Hour;
    public function minute(): Minute;
    public function second(): Second;
    public function millisecond(): Millisecond;
    public function format(Format $format): string;
    public function changeTimezone(Timezone $zone): self;
    public function timezone(): Timezone;
    public function elapsedSince(self $point): ElapsedPeriod;
    public function goBack(Period $period): self;
    public function goForward(Period $period): self;
    public function equals(self $point): bool;
    public function aheadOf(self $point): bool;
    public function toString(): string;
}
