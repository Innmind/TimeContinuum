<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Helsinki,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class HelsinkiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Helsinki;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
