<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Africa;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Timezone
};

final class Bissau implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Africa/Bissau');
    }
}
