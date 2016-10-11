<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Atlantic;

use Innmind\TimeContinuum\{
    Timezone\Earth\Atlantic\CapeVerde,
    TimezoneInterface
};

class CapeVerdeTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new CapeVerde;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(-1, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('-01:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
