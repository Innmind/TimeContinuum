<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Krasnoyarsk,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class KrasnoyarskTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Krasnoyarsk;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
