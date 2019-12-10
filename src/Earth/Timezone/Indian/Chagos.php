<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Indian;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class Chagos implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Indian/Chagos');
    }
}
