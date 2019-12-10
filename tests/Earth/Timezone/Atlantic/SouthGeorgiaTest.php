<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Atlantic;

use Innmind\TimeContinuum\{
    Earth\Timezone\Atlantic\SouthGeorgia,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class SouthGeorgiaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SouthGeorgia;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
