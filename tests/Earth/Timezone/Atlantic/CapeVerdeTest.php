<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Atlantic;

use Innmind\TimeContinuum\{
    Earth\Timezone\Atlantic\CapeVerde,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class CapeVerdeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new CapeVerde;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
