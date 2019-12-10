<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Atlantic;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class CapeVerde implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Atlantic/Cape_Verde');
    }
}
