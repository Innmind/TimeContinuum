<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\Arctic;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class Longyearbyen implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Arctic/Longyearbyen');
    }
}
