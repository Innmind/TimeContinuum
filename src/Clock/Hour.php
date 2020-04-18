<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

/**
 * @psalm-immutable
 */
interface Hour
{
    public function numberOfMinutes(): int;
    public function toInt(): int;
    public function toString(): string;
}
