<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class Efate implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Pacific/Efate');
    }
}
