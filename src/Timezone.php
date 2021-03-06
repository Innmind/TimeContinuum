<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

/**
 * @psalm-immutable
 */
interface Timezone
{
    public function hours(): int;
    public function minutes(): int;
    public function daylightSavingTimeApplied(): bool;
    public function toString(): string;
}
