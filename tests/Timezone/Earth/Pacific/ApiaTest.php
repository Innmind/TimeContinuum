<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Apia,
    TimezoneInterface
};

class ApiaTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Apia;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(14, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+14:00', (string) $zone);
        } else {
            $this->assertSame(13, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+13:00', (string) $zone);
        }
    }
}
