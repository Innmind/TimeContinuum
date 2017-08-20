<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Kabul,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KabulTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kabul;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(4, $zone->hours());
        $this->assertSame(30, $zone->minutes());
        $this->assertSame('+04:30', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
