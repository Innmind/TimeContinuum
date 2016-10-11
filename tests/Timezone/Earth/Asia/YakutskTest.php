<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Yakutsk,
    TimezoneInterface
};

class YakutskTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Yakutsk;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(9, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+09:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}