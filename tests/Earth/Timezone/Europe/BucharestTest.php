<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Bucharest,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BucharestTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Bucharest;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
