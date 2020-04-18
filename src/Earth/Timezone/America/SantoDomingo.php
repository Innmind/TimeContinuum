<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\Earth\Timezone;

/**
 * Santo Domingo in Dominican Republic
 * @psalm-immutable
 */
final class SantoDomingo extends Timezone
{
    public function __construct()
    {
        parent::__construct('America/Santo_Domingo');
    }
}
