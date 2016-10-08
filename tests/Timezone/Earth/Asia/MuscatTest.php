<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Muscat,
    TimezoneInterface
};

class MuscatTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Muscat;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(4, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+04:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
