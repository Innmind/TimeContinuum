<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Format;

use Innmind\TimeContinuum\Format;

final class RFC2822 implements Format
{
    public function __toString(): string
    {
        return \DateTime::RFC2822;
    }
}
