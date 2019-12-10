<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
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
