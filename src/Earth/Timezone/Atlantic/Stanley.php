<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Atlantic;

use Innmind\TimeContinuum\{
    Timezone as TimezoneInterface,
    Earth\Timezone,
};

final class Stanley implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Atlantic/Stanley');
    }
}
