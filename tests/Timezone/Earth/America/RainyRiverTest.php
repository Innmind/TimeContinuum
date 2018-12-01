<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\RainyRiver,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class RainyRiverTest extends TestCase
{
    public function testInterface()
    {
        $zone = new RainyRiver;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
