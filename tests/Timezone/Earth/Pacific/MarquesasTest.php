<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Marquesas,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MarquesasTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Marquesas;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(-9, $zone->hours());
        $this->assertSame(30, $zone->minutes());
        $this->assertSame('-09:30', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
