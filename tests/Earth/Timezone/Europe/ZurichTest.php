<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Zurich,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ZurichTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Zurich;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
