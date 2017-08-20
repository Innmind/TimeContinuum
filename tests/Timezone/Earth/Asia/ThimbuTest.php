<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Thimbu,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ThimbuTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Thimbu;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(6, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+06:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
