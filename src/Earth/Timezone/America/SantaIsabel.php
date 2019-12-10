<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class SantaIsabel implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/Santa_Isabel');
    }
}
