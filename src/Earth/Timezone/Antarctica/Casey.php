<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Antarctica;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class Casey implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Antarctica/Casey');
    }
}
