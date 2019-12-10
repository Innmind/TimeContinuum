<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Ponape,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class PonapeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Ponape;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
