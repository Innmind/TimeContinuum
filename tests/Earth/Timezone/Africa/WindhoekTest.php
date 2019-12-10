<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Windhoek,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class WindhoekTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Windhoek;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
