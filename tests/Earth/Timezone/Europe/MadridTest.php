<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Madrid,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MadridTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Madrid;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
