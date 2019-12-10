<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Tokyo,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class TokyoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tokyo;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
