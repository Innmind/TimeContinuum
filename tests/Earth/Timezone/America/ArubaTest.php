<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Aruba,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ArubaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Aruba;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
