<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\America\Argentina;

use Innmind\TimeContinuum\Earth\Timezone;

/**
 * @psalm-immutable
 */
final class Ushuaia extends Timezone
{
    public function __construct()
    {
        parent::__construct('America/Argentina/Ushuaia');
    }
}
