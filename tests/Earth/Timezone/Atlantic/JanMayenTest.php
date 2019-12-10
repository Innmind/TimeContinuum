<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Atlantic;

use Innmind\TimeContinuum\{
    Earth\Timezone\Atlantic\JanMayen,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class JanMayenTest extends TestCase
{
    public function testInterface()
    {
        $zone = new JanMayen;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
