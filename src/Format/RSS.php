<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Format;

use Innmind\TimeContinuum\FormatInterface;

final class RSS implements FormatInterface
{
    public function __toString(): string
    {
        return \DateTime::RSS;
    }
}
