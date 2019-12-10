<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Vientiane,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class VientianeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Vientiane;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
