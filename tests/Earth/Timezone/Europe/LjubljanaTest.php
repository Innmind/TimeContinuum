<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Ljubljana,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class LjubljanaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Ljubljana;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
