<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Africa;

use Innmind\TimeContinuum\{
    Timezone\Africa\Nairobi,
    TimezoneInterface
};

class NairobiTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Nairobi;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(3, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+03:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
