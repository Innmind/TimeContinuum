<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Antarctica;

use Innmind\TimeContinuum\{
    Timezone\Earth\Antarctica\Casey,
    TimezoneInterface
};

class CaseyTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Casey;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(8, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+08:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
