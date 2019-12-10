<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Luxembourg,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class LuxembourgTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Luxembourg;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
