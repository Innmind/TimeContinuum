<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Istanbul,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class IstanbulTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Istanbul;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
