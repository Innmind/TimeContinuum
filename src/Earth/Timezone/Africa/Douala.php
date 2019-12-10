<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class Douala implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Africa/Douala');
    }
}
