<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Saipan,
    TimezoneInterface
};

class SaipanTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Saipan;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(10, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+10:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
