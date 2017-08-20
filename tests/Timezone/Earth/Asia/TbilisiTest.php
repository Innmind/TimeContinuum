<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Tbilisi,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TbilisiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tbilisi;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(4, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+04:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
