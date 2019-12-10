<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\America\NorthDakota;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class Beulah implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/North_Dakota/Beulah');
    }
}
