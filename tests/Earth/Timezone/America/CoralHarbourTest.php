<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\CoralHarbour,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class CoralHarbourTest extends TestCase
{
    public function testInterface()
    {
        $zone = new CoralHarbour;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
