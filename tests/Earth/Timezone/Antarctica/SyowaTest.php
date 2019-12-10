<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Antarctica;

use Innmind\TimeContinuum\{
    Earth\Timezone\Antarctica\Syowa,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class SyowaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Syowa;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
