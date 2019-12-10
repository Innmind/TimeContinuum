<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\America\Indiana;

use Innmind\TimeContinuum\{
    Timezone as TimezoneInterface,
    Earth\Timezone,
};

final class Knox implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/Indiana/Knox');
    }
}