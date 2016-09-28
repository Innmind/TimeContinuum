<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

interface TimezoneInterface
{
    public function hours(): int;
    public function minutes(): int;
    public function __toString(): string;
}
