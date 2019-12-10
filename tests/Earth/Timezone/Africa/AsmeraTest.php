<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Asmera,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class AsmeraTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Asmera;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
