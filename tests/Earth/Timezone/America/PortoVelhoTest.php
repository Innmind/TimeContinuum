<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\PortoVelho,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class PortoVelhoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new PortoVelho;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
