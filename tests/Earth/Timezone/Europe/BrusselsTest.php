<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Brussels,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BrusselsTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Brussels;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
