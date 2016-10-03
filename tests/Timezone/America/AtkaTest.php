<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\America;

use Innmind\TimeContinuum\{
    Timezone\America\Atka,
    TimezoneInterface
};

class AtkaTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Atka;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(-9, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-09:00', (string) $zone);
        } else {
            $this->assertSame(-10, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-10:00', (string) $zone);
        }
    }
}
