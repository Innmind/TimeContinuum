<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\America\NorthDakota;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class NewSalem implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/North_Dakota/New_Salem');
    }
}
