<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Indiana;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Indiana\Vevay,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class VevayTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Vevay;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
