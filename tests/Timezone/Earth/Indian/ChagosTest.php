<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Indian;

use Innmind\TimeContinuum\{
    Timezone\Earth\Indian\Chagos,
    TimezoneInterface
};

class ChagosTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Chagos;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(6, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+06:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
