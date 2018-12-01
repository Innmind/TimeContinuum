<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Midway,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MidwayTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Midway;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
