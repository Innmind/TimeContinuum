<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Midway,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MidwayTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Midway;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
