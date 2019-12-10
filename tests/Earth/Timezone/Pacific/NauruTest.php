<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Nauru,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class NauruTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Nauru;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
