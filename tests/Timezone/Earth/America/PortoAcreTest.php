<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\PortoAcre,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PortoAcreTest extends TestCase
{
    public function testInterface()
    {
        $zone = new PortoAcre;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(-5, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('-05:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
