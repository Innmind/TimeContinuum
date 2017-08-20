<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Gaborone,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class GaboroneTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Gaborone;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(2, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+02:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
