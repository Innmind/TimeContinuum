<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\America\Argentina;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class Salta implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/Argentina/Salta');
    }
}
