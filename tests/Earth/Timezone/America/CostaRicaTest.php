<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\CostaRica,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class CostaRicaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new CostaRica;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
