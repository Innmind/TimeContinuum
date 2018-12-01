<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Tirane,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TiraneTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tirane;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
