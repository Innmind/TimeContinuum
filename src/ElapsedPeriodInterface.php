<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

use Innmind\TimeContinuum\Exception\ElapsedPeriodCantBeNegativeException;

interface ElapsedPeriodInterface
{
    public function milliseconds(): int;
    public function longerThan(self $period): bool;
    public function equals(self $period): bool;
}
