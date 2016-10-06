<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class Mbabane implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Africa/Mbabane');
    }
}