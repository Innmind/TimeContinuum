<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\PagoPago,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PagoPagoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new PagoPago;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
