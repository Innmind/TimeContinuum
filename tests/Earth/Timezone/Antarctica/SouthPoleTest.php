<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Antarctica;

use Innmind\TimeContinuum\{
    Earth\Timezone\Antarctica\SouthPole,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class SouthPoleTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SouthPole;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
