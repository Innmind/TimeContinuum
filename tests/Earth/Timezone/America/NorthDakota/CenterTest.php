<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\NorthDakota;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\NorthDakota\Center,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class CenterTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Center;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
