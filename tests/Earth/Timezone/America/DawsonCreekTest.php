<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\DawsonCreek,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class DawsonCreekTest extends TestCase
{
    public function testInterface()
    {
        $zone = new DawsonCreek;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
