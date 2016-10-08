<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Kolkata,
    TimezoneInterface
};

class KolkataTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Kolkata;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(5, $zone->hours());
        $this->assertSame(30, $zone->minutes());
        $this->assertSame('+05:30', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
