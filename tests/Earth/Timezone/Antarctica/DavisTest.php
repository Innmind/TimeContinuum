<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Antarctica;

use Innmind\TimeContinuum\{
    Earth\Timezone\Antarctica\Davis,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class DavisTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Davis;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
