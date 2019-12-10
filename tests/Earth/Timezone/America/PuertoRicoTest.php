<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\PuertoRico,
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
