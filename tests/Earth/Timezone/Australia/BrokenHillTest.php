<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\BrokenHill,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BrokenHillTest extends TestCase
{
    public function testInterface()
    {
        $zone = new BrokenHill;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
