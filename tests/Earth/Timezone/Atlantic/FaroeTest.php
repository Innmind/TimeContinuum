<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Atlantic;

use Innmind\TimeContinuum\{
    Earth\Timezone\Atlantic\Faroe,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class FaroeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Faroe;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
