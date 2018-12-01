<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\HoChiMinh,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class HoChiMinhTest extends TestCase
{
    public function testInterface()
    {
        $zone = new HoChiMinh;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
