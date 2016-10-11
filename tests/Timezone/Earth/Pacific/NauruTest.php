<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Nauru,
    TimezoneInterface
};

class NauruTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Nauru;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(12, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+12:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
