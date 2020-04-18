<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\America\NorthDakota;

use Innmind\TimeContinuum\Earth\Timezone;

/**
 * @psalm-immutable
 */
final class Center extends Timezone
{
    public function __construct()
    {
        parent::__construct('America/North_Dakota/Center');
    }
}
