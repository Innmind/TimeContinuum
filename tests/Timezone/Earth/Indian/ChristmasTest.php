<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Indian;

use Innmind\TimeContinuum\{
    Timezone\Earth\Indian\Christmas,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ChristmasTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Christmas;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(7, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+07:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
