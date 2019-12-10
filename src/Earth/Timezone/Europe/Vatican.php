<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class Vatican implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Europe/Vatican');
    }
}
