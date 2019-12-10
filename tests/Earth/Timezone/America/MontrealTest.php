<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Montreal,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MontrealTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Montreal;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
