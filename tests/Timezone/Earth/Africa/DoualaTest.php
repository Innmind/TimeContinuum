<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Douala,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DoualaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Douala;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
