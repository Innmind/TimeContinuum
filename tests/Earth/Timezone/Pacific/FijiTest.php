<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Fiji,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class FijiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Fiji;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
