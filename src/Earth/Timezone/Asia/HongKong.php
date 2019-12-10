<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class HongKong implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Asia/Hong_Kong');
    }
}
