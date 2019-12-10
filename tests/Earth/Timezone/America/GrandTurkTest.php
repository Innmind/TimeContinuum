<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\GrandTurk,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class GrandTurkTest extends TestCase
{
    public function testInterface()
    {
        $zone = new GrandTurk;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
