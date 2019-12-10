<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Format;

use Innmind\TimeContinuum\Format;

final class RFC850 implements Format
{
    public function toString(): string
    {
        return \DateTime::RFC850;
    }
}
