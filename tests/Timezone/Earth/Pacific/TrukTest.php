<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Truk,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TrukTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Truk;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
