<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Argentina;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Argentina\Cordoba,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class CordobaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Cordoba;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
