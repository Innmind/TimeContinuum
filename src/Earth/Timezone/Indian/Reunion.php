<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Indian;

use Innmind\TimeContinuum\{
    Timezone as TimezoneInterface,
    Earth\Timezone,
};

final class Reunion implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Indian/Reunion');
    }
}
