<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\UstNera,
    TimezoneInterface
};

class UstNeraTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new UstNera;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(10, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+10:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
