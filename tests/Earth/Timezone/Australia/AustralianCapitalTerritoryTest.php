<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\AustralianCapitalTerritory,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class AustralianCapitalTerritoryTest extends TestCase
{
    public function testInterface()
    {
        $zone = new AustralianCapitalTerritory;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
