<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Timezone as TimezoneInterface,
    Earth\Timezone,
};

final class Tarawa implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Pacific/Tarawa');
    }
}
