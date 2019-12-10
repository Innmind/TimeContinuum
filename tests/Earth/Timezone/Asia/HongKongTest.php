<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\HongKong,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class HongKongTest extends TestCase
{
    public function testInterface()
    {
        $zone = new HongKong;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
