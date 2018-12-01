<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Kabul,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KabulTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kabul;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
