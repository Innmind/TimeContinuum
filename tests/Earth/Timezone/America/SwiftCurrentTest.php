<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\SwiftCurrent,
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
