<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Yap,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class YapTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Yap;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
