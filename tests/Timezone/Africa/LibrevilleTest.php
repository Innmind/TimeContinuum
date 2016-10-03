<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Africa;

use Innmind\TimeContinuum\{
    Timezone\Africa\Libreville,
    TimezoneInterface
};

class LibrevilleTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Libreville;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(1, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+01:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}