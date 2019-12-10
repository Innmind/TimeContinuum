<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Cairo,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class CairoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Cairo;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
