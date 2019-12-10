<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Indiana;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Indiana\TellCity,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class TellCityTest extends TestCase
{
    public function testInterface()
    {
        $zone = new TellCity;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
