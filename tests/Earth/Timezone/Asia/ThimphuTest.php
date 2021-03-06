<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Thimphu,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ThimphuTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Thimphu;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
