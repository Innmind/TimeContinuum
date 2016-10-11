<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\Atlantic;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class Canary implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Atlantic/Canary');
    }
}