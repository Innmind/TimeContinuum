<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class Truk implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Pacific/Truk');
    }
}
