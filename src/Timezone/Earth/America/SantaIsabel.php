<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class SantaIsabel implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/Santa_Isabel');
    }
}
