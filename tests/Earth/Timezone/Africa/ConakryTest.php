<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Conakry,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ConakryTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Conakry;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
