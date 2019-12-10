<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Lisbon,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class LisbonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Lisbon;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
