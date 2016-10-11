<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Atlantic;

use Innmind\TimeContinuum\{
    Timezone\Earth\Atlantic\Azores,
    TimezoneInterface
};

class AzoresTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Azores;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(0, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('Z', (string) $zone);
        } else {
            $this->assertSame(-1, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-01:00', (string) $zone);
        }
    }
}
