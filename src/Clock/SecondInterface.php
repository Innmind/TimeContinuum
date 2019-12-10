<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

interface SecondInterface
{
    public function toInt(): int;
    public function __toString(): string;
}
