<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Indian;

use Innmind\TimeContinuum\{
    Earth\Timezone\Indian\Christmas,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ChristmasTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Christmas;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
