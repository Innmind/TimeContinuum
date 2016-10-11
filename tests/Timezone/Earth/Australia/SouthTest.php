<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\South,
    TimezoneInterface
};

class SouthTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new South;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(10, $zone->hours());
            $this->assertSame(30, $zone->minutes());
            $this->assertSame('+10:30', (string) $zone);
        } else {
            $this->assertSame(9, $zone->hours());
            $this->assertSame(30, $zone->minutes());
            $this->assertSame('+09:30', (string) $zone);
        }
    }
}
