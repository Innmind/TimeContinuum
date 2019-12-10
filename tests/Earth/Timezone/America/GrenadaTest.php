<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Grenada,
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
