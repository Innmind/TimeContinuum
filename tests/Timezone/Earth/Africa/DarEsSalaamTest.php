<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\DarEsSalaam,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DarEsSalaamTest extends TestCase
{
    public function testInterface()
    {
        $zone = new DarEsSalaam;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(3, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+03:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
