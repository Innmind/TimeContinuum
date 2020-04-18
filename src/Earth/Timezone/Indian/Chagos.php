<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Indian;

use Innmind\TimeContinuum\Earth\Timezone;

/**
 * @psalm-immutable
 */
final class Chagos extends Timezone
{
    public function __construct()
    {
        parent::__construct('Indian/Chagos');
    }
}
