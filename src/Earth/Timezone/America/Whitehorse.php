<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Timezone as TimezoneInterface,
    Earth\Timezone,
};

final class Whitehorse implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/Whitehorse');
    }
}
