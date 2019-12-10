<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\Hobart,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class HobartTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Hobart;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
