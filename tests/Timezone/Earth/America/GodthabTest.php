<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Godthab,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class GodthabTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Godthab;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(-2, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-02:00', (string) $zone);
        } else {
            $this->assertSame(-3, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-03:00', (string) $zone);
        }
    }
}
