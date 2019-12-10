<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Indian;

use Innmind\TimeContinuum\{
    Timezone as TimezoneInterface,
    Earth\Timezone,
};

final class Kerguelen implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Indian/Kerguelen');
    }
}
