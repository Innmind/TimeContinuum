<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Enderbury,
    TimezoneInterface
};

class EnderburyTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Enderbury;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(13, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+13:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
