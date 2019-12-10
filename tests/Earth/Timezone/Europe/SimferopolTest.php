<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Simferopol,
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
