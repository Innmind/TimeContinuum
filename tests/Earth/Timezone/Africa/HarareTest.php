<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Harare,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class HarareTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Harare;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
