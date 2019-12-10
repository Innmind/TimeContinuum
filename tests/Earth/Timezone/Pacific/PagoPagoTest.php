<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\PagoPago,
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
