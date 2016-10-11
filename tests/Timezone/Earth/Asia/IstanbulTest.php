<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Istanbul,
    TimezoneInterface
};

class IstanbulTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Istanbul;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(3, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+03:00', (string) $zone);
    }
}