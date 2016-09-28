<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

interface PointInTimeInterface
{
    /**
     * Since 1970-01-01T00:00:00+00:00
     */
    public function milliseconds(): int;
    public function year(): int;
    public function month(): int;
    public function day(): int;
    public function hour(): int;
    public function minute(): int;
    public function second(): int;
    public function millisecond(): int;
    public function format(FormatInterface $format): string;
    public function changeTimezone(TimezoneInterface $zone): self;
    public function timezone(): TimezoneInterface;

    /**
     * Return the equivalent time at Greenwich
     */
    public function greenwich(): self;
    public function elapsedSince(self $point): ElpasedPeriod;
    public function goBack(PeriodInterface $period): self;
    public function goForward(PeriodInterface $period): self;
    public function equals(self $point): bool;
    public function aheadOf(self $point): bool;
}
