<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

/**
 * @psalm-immutable
 */
interface ElapsedPeriod
{
    public function milliseconds(): int;
    public function longerThan(self $period): bool;
    public function equals(self $period): bool;
}
