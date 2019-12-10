<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Indiana;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Indiana\Winamac,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class WinamacTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Winamac;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
