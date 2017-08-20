<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Fiji,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class FijiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Fiji;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(13, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+13:00', (string) $zone);
        } else {
            $this->assertSame(12, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+12:00', (string) $zone);
        }
    }
}
