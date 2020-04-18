<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\America\Argentina;

use Innmind\TimeContinuum\Earth\Timezone;

/**
 * @psalm-immutable
 */
final class BuenosAires extends Timezone
{
    public function __construct()
    {
        parent::__construct('America/Argentina/Buenos_Aires');
    }
}
