<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class Ashkhabad implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Asia/Ashkhabad');
    }
}
