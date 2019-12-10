<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

interface Format
{
    public function __toString(): string;
}
