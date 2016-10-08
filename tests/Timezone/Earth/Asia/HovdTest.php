<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Hovd,
    TimezoneInterface
};

class HovdTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Hovd;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(8, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+08:00', (string) $zone);
        } else {
            $this->assertSame(7, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+07:00', (string) $zone);
        }
    }
}
