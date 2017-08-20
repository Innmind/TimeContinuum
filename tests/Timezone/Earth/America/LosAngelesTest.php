<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\LosAngeles,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LosAngelesTest extends TestCase
{
    public function testInterface()
    {
        $zone = new LosAngeles;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(-7, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-07:00', (string) $zone);
        } else {
            $this->assertSame(-8, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-08:00', (string) $zone);
        }
    }
}
