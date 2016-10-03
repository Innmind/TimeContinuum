<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\America\Indiana;

use Innmind\TimeContinuum\{
    Timezone\America\Indiana\Marengo,
    TimezoneInterface
};

class MarengoTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Marengo;

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
