<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Tarawa,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class TarawaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tarawa;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
