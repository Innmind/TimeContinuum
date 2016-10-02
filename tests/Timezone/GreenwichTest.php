<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone;

use Innmind\TimeContinuum\{
    Timezone\Greenwich,
    TimezoneInterface
};

class GreenwichTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Greenwich;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(0, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('Z', (string) $zone);
    }

    public function testDaylightSavingTime()
    {
        $zone = Greenwich::daylightSavingTime();

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(1, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+01:00', (string) $zone);
        $this->assertTrue($zone->daylightSavingTimeApplied());
    }
}
