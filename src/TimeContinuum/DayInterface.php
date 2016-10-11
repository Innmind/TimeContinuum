<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\TimeContinuum;

interface DayInterface
{
    public function weekNumber(): int;
    public function ofYear(): int;
    public function toInt(): int;
    public function __toString(): string;
}
