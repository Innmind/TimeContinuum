<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Kiritimati,
    TimezoneInterface
};

class KiritimatiTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Kiritimati;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(14, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+14:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
