<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Simferopol,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SimferopolTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Simferopol;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
