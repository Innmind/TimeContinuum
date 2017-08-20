<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\Melbourne,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MelbourneTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Melbourne;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(11, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+11:00', (string) $zone);
        } else {
            $this->assertSame(10, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+10:00', (string) $zone);
        }
    }
}
