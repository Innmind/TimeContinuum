<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\Argentina;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Argentina\SanLuis,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SanLuisTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SanLuis;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
