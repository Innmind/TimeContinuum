<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\FortWayne,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class FortWayneTest extends TestCase
{
    public function testInterface()
    {
        $zone = new FortWayne;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
