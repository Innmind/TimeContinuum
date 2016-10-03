<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\America;

use Innmind\TimeContinuum\{
    Timezone\America\SaintJohns,
    TimezoneInterface
};

class SaintJohnsTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new SaintJohns;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(-2, $zone->hours());
            $this->assertSame(30, $zone->minutes());
            $this->assertSame('-02:30', (string) $zone);
        } else {
            $this->assertSame(-3, $zone->hours());
            $this->assertSame(30, $zone->minutes());
            $this->assertSame('-03:30', (string) $zone);
        }
    }
}
