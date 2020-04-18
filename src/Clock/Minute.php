<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

/**
 * @psalm-immutable
 */
interface Minute
{
    public function numberOfSeconds(): int;
    public function toInt(): int;
    public function toString(): string;
}
