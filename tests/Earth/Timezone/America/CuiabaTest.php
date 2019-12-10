<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Cuiaba,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class CuiabaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Cuiaba;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
