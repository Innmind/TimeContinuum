<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Riyadh,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class RiyadhTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Riyadh;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
