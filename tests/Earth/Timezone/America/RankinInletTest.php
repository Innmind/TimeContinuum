<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\RankinInlet,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class RankinInletTest extends TestCase
{
    public function testInterface()
    {
        $zone = new RankinInlet;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
