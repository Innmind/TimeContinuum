<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Atlantic;

use Innmind\TimeContinuum\{
    Timezone\Earth\Atlantic\Faroe,
    TimezoneInterface
};

class FaroeTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Faroe;

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
