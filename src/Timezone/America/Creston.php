<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\America;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class Creston implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/Creston');
    }
}
