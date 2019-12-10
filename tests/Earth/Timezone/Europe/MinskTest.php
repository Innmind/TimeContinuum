<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Minsk,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MinskTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Minsk;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
