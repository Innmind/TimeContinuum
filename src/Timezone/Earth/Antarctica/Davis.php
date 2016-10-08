<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\Antarctica;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class Davis implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Antarctica/Davis');
    }
}
