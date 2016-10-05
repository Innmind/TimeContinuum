<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\TimeContinuum;

interface YearInterface
{
    public function numberOfDays(): int;
    public function toInt(): int;
    public function __toString(): string;
}
