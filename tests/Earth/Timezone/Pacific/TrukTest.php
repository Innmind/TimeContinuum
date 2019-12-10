<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Truk,
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
