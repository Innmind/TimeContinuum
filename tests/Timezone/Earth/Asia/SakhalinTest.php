<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Sakhalin,
    TimezoneInterface
};

class SakhalinTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Sakhalin;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(11, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+11:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
