<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Athens,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class AthensTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Athens;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
