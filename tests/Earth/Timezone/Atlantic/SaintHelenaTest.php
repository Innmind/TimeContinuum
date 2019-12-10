<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Atlantic;

use Innmind\TimeContinuum\{
    Earth\Timezone\Atlantic\SaintHelena,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class SaintHelenaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SaintHelena;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
