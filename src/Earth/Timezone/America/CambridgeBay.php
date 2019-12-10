<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class CambridgeBay implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/Cambridge_Bay');
    }
}
