<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\Indiana;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Indiana\Winamac,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class WinamacTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Winamac;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
