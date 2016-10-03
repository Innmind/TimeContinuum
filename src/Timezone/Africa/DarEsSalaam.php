<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Africa;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Timezone
};

final class DarEsSalaam implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Africa/Dar_es_Salaam');
    }
}
