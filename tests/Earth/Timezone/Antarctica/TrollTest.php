<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Antarctica;

use Innmind\TimeContinuum\{
    Earth\Timezone\Antarctica\Troll,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class TrollTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Troll;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
