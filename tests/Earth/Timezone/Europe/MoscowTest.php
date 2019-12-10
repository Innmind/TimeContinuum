<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Moscow,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MoscowTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Moscow;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
