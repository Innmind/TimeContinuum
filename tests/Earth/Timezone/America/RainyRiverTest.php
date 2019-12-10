<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\RainyRiver,
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
