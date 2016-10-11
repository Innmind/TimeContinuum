<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Tongatapu,
    TimezoneInterface
};

class TongatapuTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Tongatapu;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(13, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+13:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
