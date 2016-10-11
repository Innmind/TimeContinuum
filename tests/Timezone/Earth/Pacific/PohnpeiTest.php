<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Pohnpei,
    TimezoneInterface
};

class PohnpeiTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Pohnpei;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(11, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+11:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
