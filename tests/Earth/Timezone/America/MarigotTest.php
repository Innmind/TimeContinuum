<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Marigot,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MarigotTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Marigot;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
