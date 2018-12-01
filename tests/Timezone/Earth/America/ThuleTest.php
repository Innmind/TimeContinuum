<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Thule,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ThuleTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Thule;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
