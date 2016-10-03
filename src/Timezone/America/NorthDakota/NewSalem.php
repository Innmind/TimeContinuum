<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\America\NorthDakota;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Timezone
};

final class NewSalem implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/North_Dakota/New_Salem');
    }
}
