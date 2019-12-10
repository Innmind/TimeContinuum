<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Lome,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class LomeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Lome;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
