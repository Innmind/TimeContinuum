<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\Indian;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class Antananarivo implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Indian/Antananarivo');
    }
}
