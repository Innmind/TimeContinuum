<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Chicago,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ChicagoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Chicago;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
