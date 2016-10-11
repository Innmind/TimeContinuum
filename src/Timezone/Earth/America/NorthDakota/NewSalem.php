<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\America\NorthDakota;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class NewSalem implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/North_Dakota/New_Salem');
    }
}
