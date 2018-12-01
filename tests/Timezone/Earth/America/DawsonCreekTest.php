<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\DawsonCreek,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DawsonCreekTest extends TestCase
{
    public function testInterface()
    {
        $zone = new DawsonCreek;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
