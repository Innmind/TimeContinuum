<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Antarctica;

use Innmind\TimeContinuum\{
    Timezone\Earth\Antarctica\McMurdo,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class McMurdoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new McMurdo;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(13, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+13:00', (string) $zone);
        } else {
            $this->assertSame(+12, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+12:00', (string) $zone);
        }
    }
}
