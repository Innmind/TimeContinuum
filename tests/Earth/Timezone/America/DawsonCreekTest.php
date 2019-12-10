<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\DawsonCreek,
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
