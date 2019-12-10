<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Kampala,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class KampalaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kampala;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
