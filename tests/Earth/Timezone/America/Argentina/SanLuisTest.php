<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Argentina;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Argentina\SanLuis,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class SanLuisTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SanLuis;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
