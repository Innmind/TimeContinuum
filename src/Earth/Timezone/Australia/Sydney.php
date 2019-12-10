<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Timezone as TimezoneInterface,
    Earth\Timezone,
};

final class Sydney implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Australia/Sydney');
    }
}
