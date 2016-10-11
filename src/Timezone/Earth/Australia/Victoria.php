<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class Victoria implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Australia/Victoria');
    }
}
