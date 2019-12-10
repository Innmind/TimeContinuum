<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Efate,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class EfateTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Efate;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
