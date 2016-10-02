<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Africa;

use Innmind\TimeContinuum\{
    Timezone\Africa\Abidjan,
    TimezoneInterface
};

class AbidjanTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Abidjan;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(0, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('Z', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
