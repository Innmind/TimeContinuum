<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\Melbourne,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MelbourneTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Melbourne;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
