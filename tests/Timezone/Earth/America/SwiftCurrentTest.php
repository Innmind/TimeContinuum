<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\SwiftCurrent,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SwiftCurrentTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SwiftCurrent;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
