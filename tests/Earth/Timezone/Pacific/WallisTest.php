<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Wallis,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class WallisTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Wallis;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
