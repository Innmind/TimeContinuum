<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\PortAuPrince,
    TimezoneInterface
};

class PortAuPrinceTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new PortAuPrince;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        //php error as there's not more dst since end of 2015
        //@see : https://www.timeanddate.com/time/zone/haiti/port-au-prince
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
