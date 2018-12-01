<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\PortOfSpain,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PortOfSpainTest extends TestCase
{
    public function testInterface()
    {
        $zone = new PortOfSpain;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
