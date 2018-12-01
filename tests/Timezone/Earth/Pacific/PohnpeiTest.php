<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Pohnpei,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PohnpeiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Pohnpei;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
