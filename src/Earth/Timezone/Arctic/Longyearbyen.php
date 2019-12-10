<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Arctic;

use Innmind\TimeContinuum\{
    Timezone as TimezoneInterface,
    Earth\Timezone,
};

final class Longyearbyen implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Arctic/Longyearbyen');
    }
}
