<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Timezone as TimezoneInterface,
    Earth\Timezone,
};

final class Galapagos implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Pacific/Galapagos');
    }
}
