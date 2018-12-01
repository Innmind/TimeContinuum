<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Ponape,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PonapeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Ponape;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
