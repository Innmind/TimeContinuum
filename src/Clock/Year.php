<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

interface Year
{
    public function numberOfDays(): int;
    public function numberOfMonths(): int;
    public function toInt(): int;
    public function toString(): string;
}
