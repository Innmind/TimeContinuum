<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Indian;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class Cocos implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Indian/Cocos');
    }
}
