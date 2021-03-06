<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Kiritimati,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class KiritimatiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kiritimati;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
