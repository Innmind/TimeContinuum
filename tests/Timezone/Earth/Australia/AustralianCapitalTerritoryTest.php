<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\AustralianCapitalTerritory,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AustralianCapitalTerritoryTest extends TestCase
{
    public function testInterface()
    {
        $zone = new AustralianCapitalTerritory;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
