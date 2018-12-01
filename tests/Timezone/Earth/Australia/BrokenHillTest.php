<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\BrokenHill,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BrokenHillTest extends TestCase
{
    public function testInterface()
    {
        $zone = new BrokenHill;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
