<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Macao,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MacaoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Macao;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(8, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+08:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
