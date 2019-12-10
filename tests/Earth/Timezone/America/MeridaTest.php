<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Merida,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MeridaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Merida;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
