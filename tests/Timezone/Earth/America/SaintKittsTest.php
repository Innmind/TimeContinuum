<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\SaintKitts,
    TimezoneInterface
};

class SaintKittsTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new SaintKitts;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(-4, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('-04:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
