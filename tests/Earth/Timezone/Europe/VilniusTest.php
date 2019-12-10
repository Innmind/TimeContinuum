<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Vilnius,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class VilniusTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Vilnius;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
