<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class SaintLucia implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/St_Lucia');
    }
}
