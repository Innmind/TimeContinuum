<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

interface Month
{
    public function numberOfDays(): int;
    public function toInt(): int;
    public function __toString(): string;
}
