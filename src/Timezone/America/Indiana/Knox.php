<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\America\Indiana;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Timezone
};

final class Knox implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('America/Indiana/Knox');
    }
}
