<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Shiprock,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ShiprockTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Shiprock;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
