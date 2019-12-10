<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class Canberra implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Australia/Canberra');
    }
}
