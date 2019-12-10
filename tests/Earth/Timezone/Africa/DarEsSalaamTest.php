<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\DarEsSalaam,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class DarEsSalaamTest extends TestCase
{
    public function testInterface()
    {
        $zone = new DarEsSalaam;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
