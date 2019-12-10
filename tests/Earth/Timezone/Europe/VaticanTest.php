<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Vatican,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class VaticanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Vatican;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
