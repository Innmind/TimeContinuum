<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Dawson,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class DawsonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Dawson;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
