<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Barbados,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BarbadosTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Barbados;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
