<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Uzhgorod,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class UzhgorodTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Uzhgorod;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
