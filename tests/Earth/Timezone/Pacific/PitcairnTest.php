<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Pitcairn,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class PitcairnTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Pitcairn;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
