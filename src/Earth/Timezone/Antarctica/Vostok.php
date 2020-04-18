<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Antarctica;

use Innmind\TimeContinuum\Earth\Timezone;

/**
 * @psalm-immutable
 */
final class Vostok extends Timezone
{
    public function __construct()
    {
        parent::__construct('Antarctica/Vostok');
    }
}
