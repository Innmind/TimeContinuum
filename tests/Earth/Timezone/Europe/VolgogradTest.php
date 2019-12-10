<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Volgograd,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class VolgogradTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Volgograd;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
