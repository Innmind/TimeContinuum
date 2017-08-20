<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\DawsonCreek,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DawsonCreekTest extends TestCase
{
    public function testInterface()
    {
        $zone = new DawsonCreek;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(-7, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('-07:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
