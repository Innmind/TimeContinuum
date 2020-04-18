<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Arctic;

use Innmind\TimeContinuum\Earth\Timezone;

/**
 * @psalm-immutable
 */
final class Longyearbyen extends Timezone
{
    public function __construct()
    {
        parent::__construct('Arctic/Longyearbyen');
    }
}
