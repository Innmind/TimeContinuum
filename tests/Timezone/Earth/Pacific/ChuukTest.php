<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Chuuk,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ChuukTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Chuuk;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
