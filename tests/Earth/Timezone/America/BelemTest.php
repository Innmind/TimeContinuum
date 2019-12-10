<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Belem,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BelemTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Belem;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
