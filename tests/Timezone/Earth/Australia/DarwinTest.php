<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\Darwin,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DarwinTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Darwin;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(9, $zone->hours());
        $this->assertSame(30, $zone->minutes());
        $this->assertSame('+09:30', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
