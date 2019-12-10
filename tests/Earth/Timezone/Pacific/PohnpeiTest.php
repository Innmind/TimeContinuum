<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Pohnpei,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class PohnpeiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Pohnpei;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
