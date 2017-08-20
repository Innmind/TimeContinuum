<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Iqaluit,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class IqaluitTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Iqaluit;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(-4, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-04:00', (string) $zone);
        } else {
            $this->assertSame(-5, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-05:00', (string) $zone);
        }
    }
}
