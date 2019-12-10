<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Format;

use Innmind\TimeContinuum\FormatInterface;

final class RFC1036 implements FormatInterface
{
    public function __toString(): string
    {
        return \DateTime::RFC1036;
    }
}
