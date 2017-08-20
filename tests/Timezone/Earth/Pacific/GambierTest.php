<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Gambier,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class GambierTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Gambier;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(-9, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('-09:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
