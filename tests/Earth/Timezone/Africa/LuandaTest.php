<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Luanda,
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
