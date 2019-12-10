<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Marquesas,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MarquesasTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Marquesas;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
