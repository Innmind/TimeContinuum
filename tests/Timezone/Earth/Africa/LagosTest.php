<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Lagos,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LagosTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Lagos;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
