<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\Indian;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class Mahe implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Indian/Mahe');
    }
}
