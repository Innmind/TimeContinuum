<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Chongqing,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ChongqingTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Chongqing;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
