<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\America;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Timezone
};

final class Kralendijk implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/Kralendijk');
    }
}