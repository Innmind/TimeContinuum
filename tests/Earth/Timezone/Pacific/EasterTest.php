<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Easter,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class EasterTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Easter;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
