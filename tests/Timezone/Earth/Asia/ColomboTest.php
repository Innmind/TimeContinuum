<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Colombo,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ColomboTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Colombo;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(5, $zone->hours());
        $this->assertSame(30, $zone->minutes());
        $this->assertSame('+05:30', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
