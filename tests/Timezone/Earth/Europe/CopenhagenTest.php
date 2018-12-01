<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Copenhagen,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CopenhagenTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Copenhagen;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
