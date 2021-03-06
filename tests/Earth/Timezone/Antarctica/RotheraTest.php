<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Antarctica;

use Innmind\TimeContinuum\{
    Earth\Timezone\Antarctica\Rothera,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class RotheraTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Rothera;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
