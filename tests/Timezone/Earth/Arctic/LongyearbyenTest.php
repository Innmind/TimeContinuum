<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Arctic;

use Innmind\TimeContinuum\{
    Timezone\Earth\Arctic\Longyearbyen,
    TimezoneInterface
};

class LongyearbyenTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Longyearbyen;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(2, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+02:00', (string) $zone);
        } else {
            $this->assertSame(1, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+01:00', (string) $zone);
        }
    }
}
