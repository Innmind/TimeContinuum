<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\MexicoCity,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MexicoCityTest extends TestCase
{
    public function testInterface()
    {
        $zone = new MexicoCity;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(-5, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-05:00', (string) $zone);
        } else {
            $this->assertSame(-6, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-06:00', (string) $zone);
        }
    }
}
