<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Pangnirtung,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class PangnirtungTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Pangnirtung;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
