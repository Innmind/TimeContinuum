<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Timezone as TimezoneInterface,
    Earth\Timezone,
};

final class Queensland implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Australia/Queensland');
    }
}
