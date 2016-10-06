<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

/**
 * Santo Domingo in Dominican Republic
 */
final class SantoDomingo implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/Santo_Domingo');
    }
}
