<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\ThunderBay,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ThunderBayTest extends TestCase
{
    public function testInterface()
    {
        $zone = new ThunderBay;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
