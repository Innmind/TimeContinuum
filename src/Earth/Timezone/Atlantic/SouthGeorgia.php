<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Atlantic;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class SouthGeorgia implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Atlantic/South_Georgia');
    }
}
