<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Indian;

use Innmind\TimeContinuum\{
    Timezone\Earth\Indian\Chagos,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ChagosTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Chagos;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
