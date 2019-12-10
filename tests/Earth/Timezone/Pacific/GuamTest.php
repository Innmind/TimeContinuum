<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Guam,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class GuamTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Guam;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
