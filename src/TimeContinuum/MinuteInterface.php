<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\TimeContinuum;

interface MinuteInterface
{
    public function toInt(): int;
    public function __toString(): string;
}
