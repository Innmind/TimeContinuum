<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\KualaLumpur,
    TimezoneInterface
};

class KualaLumpurTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new KualaLumpur;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(8, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+08:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}