<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Ceuta,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CeutaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Ceuta;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
