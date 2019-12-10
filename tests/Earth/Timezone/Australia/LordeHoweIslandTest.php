<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\LordeHoweIsland,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LordeHoweIslandTest extends TestCase
{
    public function testInterface()
    {
        $zone = new LordeHoweIsland;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
