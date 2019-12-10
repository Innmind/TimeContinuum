<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Atlantic;

use Innmind\TimeContinuum\{
    Earth\Timezone\Atlantic\Canary,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class CanaryTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Canary;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
