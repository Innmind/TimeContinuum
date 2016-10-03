<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\America;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Timezone
};

final class Scoresbysund implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/Scoresbysund');
    }
}