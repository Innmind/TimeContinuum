<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Mazatlan,
    TimezoneInterface
};

class MazatlanTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Mazatlan;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(-6, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-06:00', (string) $zone);
        } else {
            $this->assertSame(-7, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-07:00', (string) $zone);
        }
    }
}
