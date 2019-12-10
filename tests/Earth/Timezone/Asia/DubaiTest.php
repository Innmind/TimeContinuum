<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Dubai,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class DubaiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Dubai;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
