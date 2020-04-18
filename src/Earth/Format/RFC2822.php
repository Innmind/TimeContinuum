<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Format;

use Innmind\TimeContinuum\Format;

/**
 * @psalm-immutable
 */
final class RFC2822 implements Format
{
    public function toString(): string
    {
        return \DateTime::RFC2822;
    }
}
