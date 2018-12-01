<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Shiprock,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ShiprockTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Shiprock;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
