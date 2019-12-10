<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Kwajalein,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class KwajaleinTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kwajalein;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
