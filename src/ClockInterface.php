<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

interface ClockInterface
{
    public function now(): PointInTimeInterface;
    public function at(string $date, FormatInterface $format = null): PointInTimeInterface;
}
