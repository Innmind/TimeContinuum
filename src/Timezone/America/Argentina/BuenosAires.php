<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\America\Argentina;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Timezone
};

final class BuenosAires implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/Argentina/Buenos_Aires');
    }
}