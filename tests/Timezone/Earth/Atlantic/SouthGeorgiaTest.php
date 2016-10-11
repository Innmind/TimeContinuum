<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Atlantic;

use Innmind\TimeContinuum\{
    Timezone\Earth\Atlantic\SouthGeorgia,
    TimezoneInterface
};

class SouthGeorgiaTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new SouthGeorgia;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(-2, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('-02:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
