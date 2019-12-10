<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Mazatlan,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MazatlanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Mazatlan;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
