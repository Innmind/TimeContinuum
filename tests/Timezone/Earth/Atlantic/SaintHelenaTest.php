<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Atlantic;

use Innmind\TimeContinuum\{
    Timezone\Earth\Atlantic\SaintHelena,
    TimezoneInterface
};

class SaintHelenaTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new SaintHelena;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(0, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('Z', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
