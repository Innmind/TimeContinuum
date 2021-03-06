<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Monaco,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MonacoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Monaco;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
