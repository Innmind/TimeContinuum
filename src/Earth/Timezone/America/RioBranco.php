<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\Earth\Timezone;

/**
 * @psalm-immutable
 */
final class RioBranco extends Timezone
{
    public function __construct()
    {
        parent::__construct('America/Rio_Branco');
    }
}
