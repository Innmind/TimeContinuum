<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\SaintJohns,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SaintJohnsTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SaintJohns;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(-2, $zone->hours());
            $this->assertSame(30, $zone->minutes());
            $this->assertSame('-02:30', (string) $zone);
        } else {
            $this->assertSame(-3, $zone->hours());
            $this->assertSame(30, $zone->minutes());
            $this->assertSame('-03:30', (string) $zone);
        }
    }
}
