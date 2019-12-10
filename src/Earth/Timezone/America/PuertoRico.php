<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class PuertoRico implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/Puerto_Rico');
    }
}
