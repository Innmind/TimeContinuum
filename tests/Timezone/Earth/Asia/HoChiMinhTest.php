<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\HoChiMinh,
    TimezoneInterface
};

class HoChiMinhTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new HoChiMinh;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(7, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+07:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
