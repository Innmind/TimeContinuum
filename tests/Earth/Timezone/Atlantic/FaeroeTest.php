<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Atlantic;

use Innmind\TimeContinuum\{
    Earth\Timezone\Atlantic\Faeroe,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class FaeroeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Faeroe;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
