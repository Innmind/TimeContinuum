<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Timezone as TimezoneInterface,
    Earth\Timezone,
};

final class CoralHarbour implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/Coral_Harbour');
    }
}
