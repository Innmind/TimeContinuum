<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Palau,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class PalauTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Palau;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
