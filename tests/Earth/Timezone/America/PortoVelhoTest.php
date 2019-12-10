<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\PortoVelho,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PortoVelhoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new PortoVelho;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
