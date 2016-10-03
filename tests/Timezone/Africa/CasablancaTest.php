<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Africa;

use Innmind\TimeContinuum\{
    Timezone\Africa\Casablanca,
    TimezoneInterface
};

class CasablancaTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Casablanca;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(1, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+01:00', (string) $zone);
        } else {
            $this->assertSame(0, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('Z', (string) $zone);
        }
    }
}
