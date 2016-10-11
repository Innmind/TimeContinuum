<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Chatham,
    TimezoneInterface
};

class ChathamTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Chatham;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(13, $zone->hours());
            $this->assertSame(45, $zone->minutes());
            $this->assertSame('+13:45', (string) $zone);
        } else {
            $this->assertSame(12, $zone->hours());
            $this->assertSame(45, $zone->minutes());
            $this->assertSame('+12:45', (string) $zone);
        }
    }
}
