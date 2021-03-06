<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Wake,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class WakeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Wake;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
