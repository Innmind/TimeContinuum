<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Antarctica;

use Innmind\TimeContinuum\{
    Timezone as TimezoneInterface,
    Earth\Timezone,
};

final class SouthPole implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Antarctica/South_Pole');
    }
}
