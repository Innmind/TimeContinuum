<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Douala,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class DoualaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Douala;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
