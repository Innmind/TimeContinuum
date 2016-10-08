<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Vladivostok,
    TimezoneInterface
};

class VladivostokTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Vladivostok;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(10, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+10:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
