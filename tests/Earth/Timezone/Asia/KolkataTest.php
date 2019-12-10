<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Kolkata,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class KolkataTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kolkata;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
