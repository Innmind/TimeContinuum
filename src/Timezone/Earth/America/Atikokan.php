<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class Atikokan implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/Atikokan');
    }
}
