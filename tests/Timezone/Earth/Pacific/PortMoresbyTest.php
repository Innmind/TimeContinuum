<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\PortMoresby,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PortMoresbyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new PortMoresby;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(10, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+10:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
