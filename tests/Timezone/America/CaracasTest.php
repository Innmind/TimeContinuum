<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\America;

use Innmind\TimeContinuum\{
    Timezone\America\Caracas,
    TimezoneInterface
};

class CaracasTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Caracas;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(-4, $zone->hours());
        $this->assertSame(30, $zone->minutes());
        $this->assertSame('-04:30', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
