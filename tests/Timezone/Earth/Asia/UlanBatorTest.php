<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\UlanBator,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class UlanBatorTest extends TestCase
{
    public function testInterface()
    {
        $zone = new UlanBator;

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
