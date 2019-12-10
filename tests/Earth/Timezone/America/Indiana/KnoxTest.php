<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Indiana;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Indiana\Knox,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class KnoxTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Knox;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
