<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\Brisbane,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BrisbaneTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Brisbane;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
