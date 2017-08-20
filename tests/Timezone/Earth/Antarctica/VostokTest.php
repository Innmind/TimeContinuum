<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Antarctica;

use Innmind\TimeContinuum\{
    Timezone\Earth\Antarctica\Vostok,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class VostokTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Vostok;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(6, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+06:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
