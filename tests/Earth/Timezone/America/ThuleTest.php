<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Thule,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ThuleTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Thule;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
