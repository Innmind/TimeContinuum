<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Format;

use Innmind\TimeContinuum\Format;

final class W3C implements Format
{
    public function toString(): string
    {
        return \DateTime::W3C;
    }
}
