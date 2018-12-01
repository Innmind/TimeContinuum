<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Moncton,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MonctonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Moncton;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
