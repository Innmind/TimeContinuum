<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\NorthDakota;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\NorthDakota\NewSalem,
    TimezoneInterface
};

class NewSalemTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new NewSalem;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(-5, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-05:00', (string) $zone);
        } else {
            $this->assertSame(-6, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-06:00', (string) $zone);
        }
    }
}
