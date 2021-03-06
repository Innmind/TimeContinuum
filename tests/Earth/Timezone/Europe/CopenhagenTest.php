<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Copenhagen,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class CopenhagenTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Copenhagen;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
