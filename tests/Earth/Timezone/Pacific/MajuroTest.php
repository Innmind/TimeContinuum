<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Majuro,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MajuroTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Majuro;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
