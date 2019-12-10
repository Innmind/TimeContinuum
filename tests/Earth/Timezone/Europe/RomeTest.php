<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Rome,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class RomeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Rome;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
