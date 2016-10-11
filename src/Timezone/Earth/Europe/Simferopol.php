<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class Simferopol implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Europe/Simferopol');
    }
}
