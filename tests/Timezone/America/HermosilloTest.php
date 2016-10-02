<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\America;

use Innmind\TimeContinuum\{
    Timezone\America\Hermosillo,
    TimezoneInterface
};

class HermosilloTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Hermosillo;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(-7, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('-07:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
