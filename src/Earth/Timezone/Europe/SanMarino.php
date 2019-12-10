<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class SanMarino implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Europe/San_Marino');
    }
}
