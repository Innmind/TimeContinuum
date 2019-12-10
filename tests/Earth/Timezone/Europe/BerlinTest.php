<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Berlin,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BerlinTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Berlin;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
