<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Indian;

use Innmind\TimeContinuum\{
    Timezone\Earth\Indian\Reunion,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ReunionTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Reunion;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(4, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+04:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
