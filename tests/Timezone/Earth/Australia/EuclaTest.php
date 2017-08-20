<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\Eucla,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class EuclaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Eucla;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(8, $zone->hours());
        $this->assertSame(45, $zone->minutes());
        $this->assertSame('+08:45', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
