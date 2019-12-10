<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Moncton,
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
