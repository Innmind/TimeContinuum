<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Indian;

use Innmind\TimeContinuum\{
    Earth\Timezone\Indian\Chagos,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ChagosTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Chagos;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
