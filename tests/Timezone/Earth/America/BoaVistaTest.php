<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\BoaVista,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BoaVistaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new BoaVista;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
