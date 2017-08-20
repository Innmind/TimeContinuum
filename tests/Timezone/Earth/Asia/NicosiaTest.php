<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Nicosia,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NicosiaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Nicosia;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(3, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+03:00', (string) $zone);
        } else {
            $this->assertSame(2, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+02:00', (string) $zone);
        }
    }
}
