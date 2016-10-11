<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\Eucla,
    TimezoneInterface
};

class EuclaTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Eucla;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(8, $zone->hours());
        $this->assertSame(45, $zone->minutes());
        $this->assertSame('+08:45', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
