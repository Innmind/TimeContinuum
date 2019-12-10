<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Gambier,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class GambierTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Gambier;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
