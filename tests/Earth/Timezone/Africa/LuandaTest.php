<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Luanda,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class LuandaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Luanda;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
