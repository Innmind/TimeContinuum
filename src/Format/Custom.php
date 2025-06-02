<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Format;

use Innmind\TimeContinuum\Format;

/**
 * @psalm-immutable
 */
interface Custom
{
    public function normalize(): Format;
}
