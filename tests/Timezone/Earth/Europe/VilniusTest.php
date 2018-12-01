<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Vilnius,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class VilniusTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Vilnius;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
