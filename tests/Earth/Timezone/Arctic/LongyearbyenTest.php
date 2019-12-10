<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Arctic;

use Innmind\TimeContinuum\{
    Earth\Timezone\Arctic\Longyearbyen,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class LongyearbyenTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Longyearbyen;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
