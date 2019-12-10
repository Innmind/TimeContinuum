<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Pyongyang,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class PyongyangTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Pyongyang;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
