<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Galapagos,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class GalapagosTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Galapagos;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
