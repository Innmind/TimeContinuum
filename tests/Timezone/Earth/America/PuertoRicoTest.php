<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\PuertoRico,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PuertoRicoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new PuertoRico;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
