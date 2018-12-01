<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Luanda,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LuandaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Luanda;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
