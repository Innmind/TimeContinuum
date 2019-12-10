<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Timezone as TimezoneInterface,
    Earth\Timezone,
};

final class Lusaka implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Africa/Lusaka');
    }
}
