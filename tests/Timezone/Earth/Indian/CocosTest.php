<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Indian;

use Innmind\TimeContinuum\{
    Timezone\Earth\Indian\Cocos,
    TimezoneInterface
};

class CocosTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Cocos;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(6, $zone->hours());
        $this->assertSame(30, $zone->minutes());
        $this->assertSame('+06:30', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
