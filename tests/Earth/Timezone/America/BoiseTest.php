<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Boise,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BoiseTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Boise;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
