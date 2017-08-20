<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Santiago,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SantiagoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Santiago;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(-3, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-03:00', (string) $zone);
        } else {
            $this->assertSame(-4, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-04:00', (string) $zone);
        }
    }
}
