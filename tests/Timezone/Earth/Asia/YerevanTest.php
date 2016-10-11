<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Yerevan,
    TimezoneInterface
};

class YerevanTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Yerevan;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(4, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+04:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}