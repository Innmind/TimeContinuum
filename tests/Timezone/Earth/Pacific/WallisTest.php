<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Wallis,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class WallisTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Wallis;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(12, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+12:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
