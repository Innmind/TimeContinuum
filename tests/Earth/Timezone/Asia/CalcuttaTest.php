<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Calcutta,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class CalcuttaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Calcutta;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
