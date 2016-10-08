<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Rangoon,
    TimezoneInterface
};

class RangoonTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Rangoon;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(6, $zone->hours());
        $this->assertSame(30, $zone->minutes());
        $this->assertSame('+06:30', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
