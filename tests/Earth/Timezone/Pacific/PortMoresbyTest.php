<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\PortMoresby,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PortMoresbyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new PortMoresby;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
