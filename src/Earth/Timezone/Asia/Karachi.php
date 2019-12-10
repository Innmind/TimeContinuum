<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Timezone as TimezoneInterface,
    Earth\Timezone,
};

final class Karachi implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Asia/Karachi');
    }
}
