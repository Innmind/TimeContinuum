<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Format;

use Innmind\TimeContinuum\Format;

final class ISO8601 implements Format
{
    public function toString(): string
    {
        return \DateTime::ATOM;
    }
}
