<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Amman,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class AmmanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Amman;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
