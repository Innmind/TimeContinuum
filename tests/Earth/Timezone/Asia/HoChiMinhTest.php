<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\HoChiMinh,
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
