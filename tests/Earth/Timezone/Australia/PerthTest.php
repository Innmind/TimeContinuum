<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\Perth,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class PerthTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Perth;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
