<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\Brisbane,
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
