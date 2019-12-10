<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Atlantic;

use Innmind\TimeContinuum\{
    Earth\Timezone\Atlantic\Madeira,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MadeiraTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Madeira;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
