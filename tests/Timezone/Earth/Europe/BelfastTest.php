<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Belfast,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BelfastTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Belfast;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(1, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+01:00', (string) $zone);
        } else {
            $this->assertSame(0, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('Z', (string) $zone);
        }
    }
}
