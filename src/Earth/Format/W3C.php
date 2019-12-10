<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Format;

use Innmind\TimeContinuum\FormatInterface;

final class W3C implements FormatInterface
{
    public function __toString(): string
    {
        return \DateTime::W3C;
    }
}
