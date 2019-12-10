<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Ensenada,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class EnsenadaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Ensenada;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
