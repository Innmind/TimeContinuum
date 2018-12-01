<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Tarawa,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TarawaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tarawa;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
