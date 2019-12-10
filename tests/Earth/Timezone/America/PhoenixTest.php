<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Phoenix,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class PhoenixTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Phoenix;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
