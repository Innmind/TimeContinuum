<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Tunis,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class TunisTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tunis;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
