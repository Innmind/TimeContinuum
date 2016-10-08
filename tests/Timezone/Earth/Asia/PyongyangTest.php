<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Pyongyang,
    TimezoneInterface
};

class PyongyangTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Pyongyang;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(8, $zone->hours());
        $this->assertSame(30, $zone->minutes());
        $this->assertSame('+08:30', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
