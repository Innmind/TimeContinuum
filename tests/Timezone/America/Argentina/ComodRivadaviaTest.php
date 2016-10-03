<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\America\Argentina;

use Innmind\TimeContinuum\{
    Timezone\America\Argentina\ComodRivadavia,
    TimezoneInterface
};

class ComodRivadaviaTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new ComodRivadavia;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(-3, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('-03:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
