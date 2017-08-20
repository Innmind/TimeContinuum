<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\Lindeman,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LindemanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Lindeman;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(10, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+10:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
