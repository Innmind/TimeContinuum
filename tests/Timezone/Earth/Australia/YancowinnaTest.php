<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\Yancowinna,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class YancowinnaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Yancowinna;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(10, $zone->hours());
            $this->assertSame(30, $zone->minutes());
            $this->assertSame('+10:30', (string) $zone);
        } else {
            $this->assertSame(9, $zone->hours());
            $this->assertSame(30, $zone->minutes());
            $this->assertSame('+09:30', (string) $zone);
        }
    }
}
