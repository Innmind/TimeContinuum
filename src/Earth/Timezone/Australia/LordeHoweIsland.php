<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class LordeHoweIsland implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Australia/LHI');
    }
}
