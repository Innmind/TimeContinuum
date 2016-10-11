<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\Indian;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class Cocos implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Indian/Cocos');
    }
}
