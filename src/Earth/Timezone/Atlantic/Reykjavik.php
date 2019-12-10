<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Atlantic;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class Reykjavik implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Atlantic/Reykjavik');
    }
}
