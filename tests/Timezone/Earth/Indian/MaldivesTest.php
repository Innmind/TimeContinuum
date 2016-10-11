<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Indian;

use Innmind\TimeContinuum\{
    Timezone\Earth\Indian\Maldives,
    TimezoneInterface
};

class MaldivesTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Maldives;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(5, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+05:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
