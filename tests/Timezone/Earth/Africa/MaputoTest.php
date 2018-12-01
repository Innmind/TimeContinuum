<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Maputo,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MaputoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Maputo;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
