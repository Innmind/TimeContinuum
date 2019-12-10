<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\America\Argentina;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class ComodRivadavia implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/Argentina/ComodRivadavia');
    }
}
