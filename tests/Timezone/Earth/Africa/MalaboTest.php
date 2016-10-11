<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Malabo,
    TimezoneInterface
};

class MalaboTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Malabo;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(1, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+01:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
