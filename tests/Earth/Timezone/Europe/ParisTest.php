<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Paris,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ParisTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Paris;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
