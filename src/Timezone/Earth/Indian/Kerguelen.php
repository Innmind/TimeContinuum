<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\Indian;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class Kerguelen implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Indian/Kerguelen');
    }
}
