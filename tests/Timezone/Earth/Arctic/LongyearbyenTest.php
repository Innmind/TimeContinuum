<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Arctic;

use Innmind\TimeContinuum\{
    Timezone\Earth\Arctic\Longyearbyen,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LongyearbyenTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Longyearbyen;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
