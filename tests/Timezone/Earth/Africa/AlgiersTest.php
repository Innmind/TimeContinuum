<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Algiers,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AlgiersTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Algiers;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(1, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+01:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
