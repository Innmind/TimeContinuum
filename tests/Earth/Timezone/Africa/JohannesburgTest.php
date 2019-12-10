<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Johannesburg,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class JohannesburgTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Johannesburg;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
