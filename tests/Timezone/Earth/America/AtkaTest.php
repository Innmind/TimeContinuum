<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Atka,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AtkaTest extends TestCase
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
