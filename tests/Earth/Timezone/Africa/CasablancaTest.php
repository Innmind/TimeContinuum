<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Casablanca,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class CasablancaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Casablanca;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
