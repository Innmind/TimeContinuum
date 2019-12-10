<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Bujumbura,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BujumburaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Bujumbura;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
