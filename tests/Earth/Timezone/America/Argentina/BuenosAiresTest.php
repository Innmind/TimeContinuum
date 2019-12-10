<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Argentina;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Argentina\BuenosAires,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BuenosAiresTest extends TestCase
{
    public function testInterface()
    {
        $zone = new BuenosAires;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
