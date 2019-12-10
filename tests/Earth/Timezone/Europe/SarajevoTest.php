<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Sarajevo,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class SarajevoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Sarajevo;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
