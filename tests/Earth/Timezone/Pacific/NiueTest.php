<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Niue,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class NiueTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Niue;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
