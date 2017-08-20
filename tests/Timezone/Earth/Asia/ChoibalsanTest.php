<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Choibalsan,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ChoibalsanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Choibalsan;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(9, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+09:00', (string) $zone);
        } else {
            $this->assertSame(8, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+08:00', (string) $zone);
        }
    }
}
