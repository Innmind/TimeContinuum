<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Omsk,
    TimezoneInterface
};

class OmskTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Omsk;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(6, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+06:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
