<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Cayman,
    TimezoneInterface
};

class CaymanTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Cayman;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            //seems php is wrong, dst has been abandoned
            //@see : https://www.timeanddate.com/news/time/cayman-islands-introduce-dst.html
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
