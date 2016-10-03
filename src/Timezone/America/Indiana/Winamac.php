<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\America\Indiana;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Timezone
};

final class Winamac implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/Indiana/Winamac');
    }
}