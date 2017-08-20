<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Kampala,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KampalaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kampala;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(3, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+03:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
