<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Vaduz,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class VaduzTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Vaduz;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
