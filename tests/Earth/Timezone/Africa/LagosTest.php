<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Lagos,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class LagosTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Lagos;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
