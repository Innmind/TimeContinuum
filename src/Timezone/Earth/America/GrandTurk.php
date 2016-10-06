<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class GrandTurk implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/Grand_Turk');
    }
}
