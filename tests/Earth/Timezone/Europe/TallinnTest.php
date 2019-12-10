<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Tallinn,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class TallinnTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tallinn;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
