<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\Indiana;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Indiana\TellCity,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TellCityTest extends TestCase
{
    public function testInterface()
    {
        $zone = new TellCity;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
