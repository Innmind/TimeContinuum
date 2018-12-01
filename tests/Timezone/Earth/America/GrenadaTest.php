<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Grenada,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class GrenadaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Grenada;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
