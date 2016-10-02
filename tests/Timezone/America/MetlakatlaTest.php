<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\America;

use Innmind\TimeContinuum\{
    Timezone\America\Metlakatla,
    TimezoneInterface
};

class MetlakatlaTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Metlakatla;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(-8, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('-08:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());

        return;

        //php does not take into account the recent DST for this timezone
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(-8, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-08:00', (string) $zone);
        } else {
            $this->assertSame(-9, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-09:00', (string) $zone);
        }
    }
}
