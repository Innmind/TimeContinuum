<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Uzhgorod,
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
