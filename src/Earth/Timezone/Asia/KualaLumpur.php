<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Earth\Timezone,
};

final class KualaLumpur implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Asia/Kuala_Lumpur');
    }
}
