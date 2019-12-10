<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Gaborone,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class GaboroneTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Gaborone;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
