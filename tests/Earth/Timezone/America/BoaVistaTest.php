<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\BoaVista,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BoaVistaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new BoaVista;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
