<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

interface Minute
{
    public function toInt(): int;
    public function toString(): string;
}
