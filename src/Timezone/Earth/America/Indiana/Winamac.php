<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\America\Indiana;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class Winamac implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/Indiana/Winamac');
    }
}
