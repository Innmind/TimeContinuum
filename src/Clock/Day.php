<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

/**
 * @psalm-immutable
 */
interface Day
{
    public function weekNumber(): int;
    public function ofYear(): int;
    public function numberOfHours(): int;
    public function toInt(): int;
    public function toString(): string;
}
