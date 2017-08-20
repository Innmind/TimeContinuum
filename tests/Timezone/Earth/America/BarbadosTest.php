<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Barbados,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BarbadosTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Barbados;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(-4, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('-04:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
