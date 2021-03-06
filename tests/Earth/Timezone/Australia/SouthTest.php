<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\South,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class SouthTest extends TestCase
{
    public function testInterface()
    {
        $zone = new South;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
