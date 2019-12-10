<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\FortWayne,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class FortWayneTest extends TestCase
{
    public function testInterface()
    {
        $zone = new FortWayne;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
