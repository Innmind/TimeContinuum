<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Maputo,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MaputoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Maputo;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
