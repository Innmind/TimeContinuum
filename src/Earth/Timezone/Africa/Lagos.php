<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class Lagos implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Africa/Lagos');
    }
}
