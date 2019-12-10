<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Asmara,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class AsmaraTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Asmara;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
