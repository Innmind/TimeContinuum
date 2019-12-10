<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Lusaka,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class LusakaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Lusaka;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
