<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\Sydney,
    TimezoneInterface
};

class SydneyTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Sydney;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(11, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+11:00', (string) $zone);
        } else {
            $this->assertSame(10, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+10:00', (string) $zone);
        }
    }
}
