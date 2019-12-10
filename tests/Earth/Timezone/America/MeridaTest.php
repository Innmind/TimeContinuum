<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Merida,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MeridaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Merida;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
