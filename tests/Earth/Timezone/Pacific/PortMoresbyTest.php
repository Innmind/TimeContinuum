<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\PortMoresby,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class PortMoresbyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new PortMoresby;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
