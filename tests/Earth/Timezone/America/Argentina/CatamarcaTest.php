<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Argentina;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Argentina\Catamarca,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class CatamarcaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Catamarca;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
