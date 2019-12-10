<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Bangkok,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BangkokTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Bangkok;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
