<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Kabul,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class KabulTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kabul;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
