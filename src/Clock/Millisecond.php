<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

/**
 * @psalm-immutable
 */
interface Millisecond
{
    public function toInt(): int;
    public function toString(): string;
}
