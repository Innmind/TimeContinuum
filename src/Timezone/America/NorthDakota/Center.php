<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\America\NorthDakota;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Timezone
};

final class Center implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/North_Dakota/Center');
    }
}
