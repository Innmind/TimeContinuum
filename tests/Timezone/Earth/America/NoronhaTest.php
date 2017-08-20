<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Noronha,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NoronhaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Noronha;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(-2, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('-02:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
