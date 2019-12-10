<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

interface Second
{
    public function toInt(): int;
    public function toString(): string;
}
