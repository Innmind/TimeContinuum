<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class Tirane implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Europe/Tirane');
    }
}
