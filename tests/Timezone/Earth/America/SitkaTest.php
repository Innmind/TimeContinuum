<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Sitka,
    TimezoneInterface
};

class SitkaTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Sitka;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(-8, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-08:00', (string) $zone);
        } else {
            $this->assertSame(-9, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-09:00', (string) $zone);
        }
    }
}
