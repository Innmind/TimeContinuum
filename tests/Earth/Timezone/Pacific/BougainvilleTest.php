<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Bougainville,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BougainvilleTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Bougainville;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
