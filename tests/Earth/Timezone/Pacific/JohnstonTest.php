<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Johnston,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class JohnstonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Johnston;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
