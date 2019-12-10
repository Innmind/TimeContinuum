<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Ceuta,
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
