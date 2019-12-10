<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Vaduz,
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
