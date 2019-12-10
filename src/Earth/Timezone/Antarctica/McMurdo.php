<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Antarctica;

use Innmind\TimeContinuum\{
    Timezone as TimezoneInterface,
    Earth\Timezone,
};

final class McMurdo implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Antarctica/McMurdo');
    }
}
