<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\ThunderBay,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ThunderBayTest extends TestCase
{
    public function testInterface()
    {
        $zone = new ThunderBay;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
