<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Timezone as TimezoneInterface,
    Earth\Timezone,
};

final class Paris implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Europe/Paris');
    }
}
