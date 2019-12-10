<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Indian;

use Innmind\TimeContinuum\{
    Earth\Timezone\Indian\Mayotte,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MayotteTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Mayotte;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
